<?
/**
 * A class to handle the YouTube playlist object.
 * @since	20101103, hafner
 */
require_once 'Zend/Loader.php';
//Zend_Loader::loadFile('AlbumQuery.php');
//Zend_Loader::loadFile('PhotoQuery.php');
Zend_Loader::loadClass('Zend_Gdata_Photos');
Zend_Loader::loadClass('Zend_Gdata_Photos_AlbumQuery' );
Zend_Loader::loadClass('Zend_Gdata_Photos_PhotoQuery' );

class PicasaAlbum
{
	/**
	 * Instance of the Zend_Gdata_Photos class.
	 * @var YouTube object
	 */
	protected $m_picasa;

	/**
	 * Current user
	 * @var	String
	 */
	protected $m_username;

	/**
	 * Initializes the Zend_Gdata_Photos object for this class.
	 * @since	20101103, hafner
	 */
	function __construct( $username )
	{
		if( strlen( trim( $username ) ) == 0 )
		{
			throw new Exception( "Error: You MUST provide a username for this class!" );
		}

		//set member vars
		$this->m_username = strtolower( $username );
		$this->m_picasa = new Zend_Gdata_Photos();
		$this->m_picasa->setMajorProtocolVersion( 2 );
	}

	public function getAlbumList()
	{
		$return = array();
		$all_albums = $this->m_picasa->getUserFeed( $this->m_username );

		foreach ( $all_albums as $i => $entry )
		{
			$return[$i]['id'] = $entry->gphotoId->text;
			$return[$i]['title'] = $entry->title->text;
		}

		return $return;

	}//getAlbumList()

	/**
	 * Returns a collection of playlist objects for the current user.
	 * @return 	Zend_Gdata_Photos_PlaylistFeed object.
	 * @since	20101103, hafner
	 */
	public function getAlbum( $selector, $value, $vars = array() )
	{
		//setup query
		$img_max = ( array_key_exists( 'img_max', $vars ) ) ? $vars['img_max'] : "800u";
		$query = new Zend_Gdata_Photos_AlbumQuery();
		$query->setUser( $this->m_username );
		$query->setImgMax( $img_max );

		//specify album
		if( $selector == "title" )
		{
			$query->setAlbumName( self::convertAlbumName( $value ) );
		}
		else
		{
			$query->setAlbumId( $value );
		}

		//get feed
		return $this->m_picasa->getAlbumFeed( $query );

	}//getAllAlbums()

	/**
	 * Returns info for every photo in the album resource.
	 * @return	array
	 * @param	resource		$album_feed		result of  $this->m_service->getAlbumFeed()
	 * @mod	20100403
	 */
	public function getAlbumSummary( $album_feed, $vars = array() )
	{
		//1 indexed for data grid feed
		$i = 1;

		//collect data
		foreach( $album_feed as $pe )
		{
			//get photo summary
			$return[$i] = $this->getPhotoSummary( &$pe, $vars );
			$i++;
		}

		return $return;

	}//getAlbumData()

	/**
	 * Returns photo URL for photoEntry object passed on success, NULL otherwise.
	 * @return	mixed
	 * @param	Zend_Gdata_Photos_PhotoEntry		$photo_entry		Pointer to a PhotoEntry object
	 * @param	string							$type				The type of URL to retrieve. enum( 'full', 'thumb' )
	 * @mod	20100403
	 */
	public function getPhotoUrl( &$entry, $type = "full", $vars = array() )
	{

		$return = FALSE;
		$type = strtolower( trim( $type ) );

		if( $type == "full" )
		{
			//get photo url
			if( $entry->getMediaGroup()->getContent() != null )
			{
				$media_content_array = $entry->getMediaGroup()->getContent();
				$return = $media_content_array[0]->getUrl();
			}
		}
		else if ( $type == "thumb" )
		{
			//get thumb url
			if( $entry->getMediaGroup()->getThumbnail() != null )
			{
				//thumb key determines the size of the image
				$key = ( array_key_exists( "thumb_key", $vars ) ) ? $vars['thumb_key'] : 0;
				$media_thumb_array = $entry->getMediaGroup()->getThumbnail();
				$return = $media_thumb_array[$key]->getUrl();
			}

		}//if type == thumb

		return $return;

	}//getPhotoUrl()

	public function getPhotoWidth( &$entry, $type = "full", $vars = array() )
	{
		if( $type == "full" )
		{
			//get photo url
			if( $entry->getMediaGroup()->getContent() != null )
			{
				$media_content_array = $entry->getMediaGroup()->getContent();
				$return = $media_content_array[0]->getWidth();
			}
		}
		else if ( $type == "thumb" )
		{
			//get thumb url
			if( $entry->getMediaGroup()->getThumbnail() != null )
			{
				//key determines the width of the image
				$key = ( array_key_exists( "thumb_key", $vars ) ) ? $vars['thumb_key'] : 0;
				$media_thumb_array = $entry->getMediaGroup()->getThumbnail();
				$return = $media_thumb_array[$key]->getWidth();
			}

		}//if type == thumb

		return $return;

	}//getPhotoWidth()

	public function getPhotoHeight( &$entry, $type = "full", $vars = array() )
	{
		if( $type == "full" )
		{
			//get photo url
			if( $entry->getMediaGroup()->getContent() != null )
			{
				$media_content_array = $entry->getMediaGroup()->getContent();
				$return = $media_content_array[0]->getHeight();
			}
		}
		else if ( $type == "thumb" )
		{
			//get thumb url
			if( $entry->getMediaGroup()->getThumbnail() != null )
			{
				//key determines the height of the image
				$key = ( array_key_exists( "thumb_key", $vars ) ) ? $vars['thumb_key'] : 0;
				$media_thumb_array = $entry->getMediaGroup()->getThumbnail();
				$return = $media_thumb_array[$key]->getHeight();
			}

		}//if type == thumb

		return $return;

	}//getPhotoHeight()

	public function getAlbumPhotoUrlSummary( $album_feed, $type = "" )
	{
		$return = array();

		switch( strtolower( trim( $type ) ) )
		{
			case "thumb":
				foreach( $album_feed as $pe )
				{
					$return[] = $this->getPhotoUrl( $pe, "thumb" );
				}
				break;

			case "full":
				foreach( $album_feed as $pe )
				{
					$return[] = $this->getPhotoUrl( $pe, "full" );
				}
				break;

			default:
				foreach( $album_feed as $pe )
				{
					$return[] = $this->getPhotoUrl( $pe, "thumb" );
					$return[] = $this->getPhotoUrl( $pe, "full" );
				}
				break;
		}

		return $return;

	}//getAlbumPhotoUrlSummary()

	public function getAllPics( $pic_type = "" )
	{
		$return = array();
		$album_list = $this->getAlbumList();

		foreach( $album_list as $i => $info )
		{
			$feed = $this->getAlbum( "id", $info['id'] );
			$photo_feed = $this->getAlbumPhotoUrlSummary( $feed, $pic_type );
			$return = array_merge( $return, $photo_feed );
		}

		return $return;

	}//getAllPics()

	public static function convertAlbumName( $name )
	{
		$return = $name;

		if( strpos( $name, " " ) !== FALSE )
		{
			$name = ucwords( $name );
			$return = str_replace( array( "(", ")", " " ), array( "", "", "" ), $name );
		}

		return $return;

	}//convertAlbumName()

	public function getPhoto( $album_name, $photo_id )
	{
		$query = new Zend_Gdata_Photos_PhotoQuery();
		$query->setUser( $this->m_username );
		$query->setAlbumName( $album_name );
		$query->setPhotoId( $photo_id );

		return $this->m_picasa->getPhotoEntry( $query );

	}//getPhoto()

	public function getPhotoSummary( &$pe, $vars = array() )
	{
		return array(
			'title' => $pe->title->text,
			'album_id' => $pe->getGphotoAlbumId()->getText(),
			'photo_id' => $pe->getGphotoId()->getText(),
			'summary' => $pe->getSummary()->getText(),
			'url_full' => $this->getPhotoUrl( &$pe, "full", $vars ),
			'url_thumb' => $this->getPhotoUrl( &$pe, "thumb", $vars ),
			'width_full' => $this->getPhotoWidth( &$pe, "full", $vars ),
			'height_full' => $this->getPhotoHeight( &$pe, "full", $vars ),
			'width_thumb' => $this->getPhotoWidth( &$pe, "thumb", $vars ),
			'height_thumb' => $this->getPhotoHeight( &$pe, "thumb", $vars )
		);

	}//getPhotoSummary()

}//class PicasaAlbum