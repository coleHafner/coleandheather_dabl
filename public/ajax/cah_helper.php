<?

session_start();

require_once( "cah_controllers/Gallery.php" );
require_once( "cah_base/Authentication.php" );
require_once( "cah_controllers/Rsvp.php" );
require_once( "cah_base/Common.php" );
require_once( "cah_base/User.php" );
require_once( "cah/Guest.php" );

$active_user = new User( Authentication::getLoginUserId() );
$process = strtolower( trim( $_GET['process'] ) );
$task = strtolower( trim( $_GET['task'] ) );
$common = new Common();

//determine action
switch( $task )
{
	case "gallery":
	
		switch( $process )
		{
			case "load-photo-grid":
				$gallery = new Gallery( 0 );
				$content = $gallery->getHtml( 'photo-grid' );
				echo $content['html'];
				break;
		}
		break;
		
	case "rsvp":
		
		//for record keeping
		$rsvp_through_site = "1";
				
		if( is_object( $active_user ) && 
			$active_user->m_user_id > 0 && 
			$active_user->permissionUserHasAny( array( 'spr' ) ) )
		{
			$rsvp_through_site = "0";
		}
		
		switch( $process )
		{
			case "validate-activation-code":
				$result = "0";
				$message = Guest::validateActivationCode( $_POST['activation_code'] );
				
				if( $message === TRUE )
				{
					$result = "1";
					$message = "http://" . $_SERVER['HTTP_HOST'] . $common->makeLink( array( 'v' => "rsvp", 'sub' => $_POST['activation_code'] ) );
				}
				
				echo $result . "^" . $message;
				break;
				
			case "update-rsvp":
				$guest = new Guest( $_POST['guest_id'], TRUE );
				$guest_list = ( $_POST['is_attending'] == "1" ) ? array( $guest->m_guest_id )  : array();
				$guest->updateGroupRsvpStatus( $_POST['is_attending'], $guest_list, $rsvp_through_site );
				break;
				
			case "show-rsvp-confirmation":
				$rsvp = new Rsvp( array() );
				$content = $rsvp->getHtml( "step-3-" . $_POST['is_attending'], array( 'guest_id' => $_POST['guest_id'] ) );
				echo $content['html'];  
				break;
				
			case "add-guest":
				$guest = new Guest( $_POST['parent_guest_id'] );
				$message = $guest->checkInput( $_POST, TRUE );
				$result = ( is_string( $message ) ) ? "0" : "1";
				
				if( $result == "1" )
				{
					$sql = "
					SELECT guest_id 
					FROM cah_Guests 
					WHERE LOWER( first_name ) = '" . strtolower( trim( $_POST['first_name'] ) ) . "' AND 
					LOWER( last_name ) = '" . strtolower( trim( $_POST['last_name'] ) ) . "' AND
					parent_guest_id = " . $guest->m_guest_id;
					
					$query_result = $common->m_db->query( $sql, __FILE__, __LINE__ );
					
					if( $common->m_db->numRows( $query_result ) > 0 )
					{
						Guest::reactivateGuest( $_POST['first_name'], $_POST['last_name'], $guest->m_guest_id );	
					}
					else
					{
						$guest->add( $_POST );
						$guest->setMemberVars( FALSE );
						$guest->setIsNew( TRUE );
					}
				}
				
				echo $result . "^" . $message;
				break;
				
			case "remove-guest":
				$guest = new Guest( $_POST['guest_id'] );
				$guest->delete( TRUE );
				break;
				
			case "finalize-rsvp":
				$guest = new Guest( $_POST['parent_guest_id'], TRUE );
				$guest->updateGroupRsvpStatus( $_POST['is_attending'], $_POST['guests'], $rsvp_through_site );
				break;
				
			case "rsvp-thank-you":
				$rsvp = new Rsvp( array() );
				$content = $rsvp->getHtml( "step-4", array( 'guest_id' => $_POST['guest_id'] ) );
				echo $content['html'];  
				break;
		}
		break;
}
?>