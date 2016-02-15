<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
 	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function backoffice()
	{
		function securise($string)
		{
		
		if(ctype_digit($string))
		{
			$string = intval($string);
		}
		
		else
		{
			$string = mysql_real_escape_string($string);
			$string = addcslashes($string, '%_');
			$string = htmlspecialchars($string); 
		}
		
		return $string;
		}

		$optionManager= new \Manager\OptionsManager();
		
		//soundcloud

		if(isset($_POST['submit_sound'])){
			$sound= securise($_POST['sound']);
			$optionManager->updateSoundcloud($sound);
		}

		if(isset($_POST['submit_txtgal'])){
			$txt= securise($_POST['txtgal']);
			$optionManager->updateTxtGallery($txt);
		}



		// gallery Controler 
		if(isset($_POST['submit_gal_1']))
		{


			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_gal_1']['tmp_name']);

			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_gal_1']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_gal_1']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_gal_1']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgGalery(1, $filePath);

			}elseif(isset($_POST['submit_gal_2']))
		{


			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_gal_2']['tmp_name']);

			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_gal_2']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_gal_2']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_gal_2']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgGalery(2, $filePath);

			}elseif(isset($_POST['submit_gal_3']))
		{


			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_gal_3']['tmp_name']);

			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_gal_3']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_gal_3']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_gal_3']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgGalery(3, $filePath);

			}elseif(isset($_POST['submit_gal_4']))
		{


			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_gal_4']['tmp_name']);

			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_gal_4']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_gal_4']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_gal_4']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgGalery(4, $filePath);

			}elseif(isset($_POST['submit_gal_5']))
		{


			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_gal_5']['tmp_name']);

			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_gal_5']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_gal_5']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_gal_5']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgGalery(5, $filePath);

		}elseif(isset($_POST['submit_gal_6']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_gal_6']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_gal_6']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_gal_6']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_gal_6']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}
				$optionManager->changeImgGalery(6, $filePath);

			}elseif(isset($_POST['submit_gal_7']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_gal_7']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_gal_7']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_gal_7']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_gal_7']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}
				$optionManager->changeImgGalery(7, $filePath);

			}elseif(isset($_POST['submit_gal_8']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_gal_8']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_gal_8']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_gal_8']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_gal_8']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}
				$optionManager->changeImgGalery(8, $filePath);

			}elseif(isset($_POST['submit_gal_9']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_gal_9']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_gal_9']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_gal_9']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_gal_9']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}
				$optionManager->changeImgGalery(9, $filePath);
		
		}

		// END gallery Controler

		if(isset($_POST['submit_slider_1']))
		{


			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_slider_1']['tmp_name']);

			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_slider_1']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_slider_1']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_slider_1']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgSlider(1, $filePath);

		}elseif(isset($_POST['submit_slider_2']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_slider_2']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_slider_2']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_slider_2']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_slider_2']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgSlider(2, $filePath);
		}elseif(isset($_POST['submit_slider_3']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_slider_3']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_slider_3']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_slider_3']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_slider_3']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgSlider(3, $filePath);

		}elseif(isset($_POST['submit_slider_4']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_slider_4']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_slider_4']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_slider_4']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_slider_4']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgSlider(4, $filePath);

		}elseif(isset($_POST['submit_slider_5']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_slider_5']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_slider_5']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_slider_5']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_slider_5']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeImgSlider(5, $filePath);
		} 





		// Function avatar testimoniaux
		if(isset($_POST['submit_avatar_1']))
		{


			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_avatar_1']['tmp_name']);

			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_avatar_1']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_avatar_1']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_avatar_1']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeAvatar(1, $filePath);

		}
		elseif(isset($_POST['submit_avatar_2']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_avatar_2']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_avatar_2']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_avatar_2']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_avatar_2']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeAvatar(2, $filePath);
		} 
		elseif(isset($_POST['submit_avatar_3']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_avatar_3']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	 'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_avatar_3']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_avatar_3']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_avatar_3']['tmp_name'], $destinationFilePath)) {
			} else{
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeAvatar(3, $filePath);
		}


		//modification du titre du site
		if(isset($_POST['submit_title'])){
			$title = securise($_POST['title']);
			$optionManager->updateTitle($title);
		}
		//rename
		if(isset($_POST['submit_name1']))
		{
			$namearea = securise($_POST['name_area']);
			$optionManager->UpName(1, $namearea);
		}
		if(isset($_POST['submit_name2']))
		{
			$namearea = securise($_POST['name_area']);
			$optionManager->UpName(2, $namearea);
		}
		if(isset($_POST['submit_name3']))
		{
			$namearea = securise($_POST['name_area']);
			$optionManager->UpName(3, $namearea);

		}

		if(isset($_POST['submit_title']))
		{
			$textcolor = securise($_POST['textcolor']);
			$optionManager->UpdateColor($textcolor);

		}

		if(isset($_POST['submit_adress']))
		{
			$address = securise($_POST['address']);
			$optionManager->saveAdress($address);

		}

		if(isset($_POST['submit_adress']))
		{
			$optionManager->saveLat( $_POST['lat']);
			
		}

		if(isset($_POST['submit_adress']))
		{
			$optionManager->saveLon( $_POST['lon']);
			
		}

		if(isset($_POST['submit_title']))
		{

			$optionManager->UpdateFont( $_POST['fonts']);

		}

		if(isset($_POST['submit_bg']))
		{
			$optionManager->UpdateBg( $_POST['textcolorbg']);

		}

		if(isset($_POST['submit_bg']))
		{
			$optionManager->updateBgGradientDirection( $_POST['gradient']);

		}


		if(isset($_POST['submit_bg']))
		{
			$optionManager->updateBgGradientColor1( $_POST['textcolorbg1']);

		}


		if(isset($_POST['submit_bg']))
		{
			$optionManager->updateBgGradientColor2( $_POST['textcolorbg2']);

		}

		if(isset($_POST['submit_bg_testi']))
		{
			$optionManager->updateBgTesiColor1( $_POST['testicolorbg1']);

		}

		if(isset($_POST['submit_bg_testi']))
		{
			$optionManager->updateBgTesiColor2( $_POST['testicolorbg2']);

		}

		if(isset($_POST['submit_bg_text']))
		{
			$optionManager->updateBgTextColor1( $_POST['textcolorbg1']);

		}

		if(isset($_POST['submit_bg_text']))
		{
			$optionManager->updateBgTextColor2( $_POST['textcolorbg2']);

		}

		if(isset($_POST['submit_bg_map']))
		{
			$optionManager->updateBgMapColor1( $_POST['mapcolorbg1']);

		}

		if(isset($_POST['submit_bg_map']))
		{
			$optionManager->updateBgMapColor2( $_POST['mapcolorbg2']);

		}


		//modification du text testimonial
		if(isset($_POST['submit_text1']))
		{
			$testiarea = securise($_POST['testi-area']);
			$optionManager->UpdateTesti(1, $testiarea);
		}
		if(isset($_POST['submit_text2']))
		{
			$testiarea = securise($_POST['testi-area']);
			$optionManager->UpdateTesti(2, $testiarea);
		}
		if(isset($_POST['submit_text3']))
		{
			$testiarea = securise($_POST['testi-area']);
			$optionManager->UpdateTesti(3, $testiarea);
		}

		//modification de la sectin text
		if(isset($_POST['submit_Sectiontext1']))
		{
			$sectext = securise($_POST['sec_text']);
			$optionManager->changeText(1, $sectext);
		}
		if(isset($_POST['submit_Sectiontext2']))
		{
			$sectext = securise($_POST['sec_text']);
			$optionManager->changeText(2, $sectext);
		}
		if(isset($_POST['submit_Sectiontext3']))
		{
			$sectext = securise($_POST['sec_text']);
			$optionManager->changeText(3, $sectext);
		}

		if (isset($_POST['submit_mail']))
		{	
			$emailpost = securise($_POST['email_recipe']);
			$optionManager->updateMail($emailpost);
		}
		
		//header 
		$optionTitleToDisplay 		= $optionManager->getTitle();
		$optionFontToDisplay 		= $optionManager->getFont();
		$optionBgToDisplay 			= $optionManager->getBg();
		$optionBgGradientDirection 	= $optionManager->getBgGradientDirection();
		$optionBgGradientColor1 	= $optionManager->getBgGradientColor1();
		$optionBgGradientColor2 	= $optionManager->getBgGradientColor2();
		//slider
		//view img slider 
		$optionSliderToDisplay1 	= $optionManager->getImgSlider(1);
		$optionSliderToDisplay2 	= $optionManager->getImgSlider(2);
		$optionSliderToDisplay3 	= $optionManager->getImgSlider(3);
		$optionSliderToDisplay4 	= $optionManager->getImgSlider(4);
		$optionSliderToDisplay5 	= $optionManager->getImgSlider(5);
		// gallery
		$optionGalleryToDisplay1 	= $optionManager->getImgGallery(1);
		$optionGalleryToDisplay2 	= $optionManager->getImgGallery(2);
		$optionGalleryToDisplay3 	= $optionManager->getImgGallery(3);
		$optionGalleryToDisplay4 	= $optionManager->getImgGallery(4);
		$optionGalleryToDisplay5 	= $optionManager->getImgGallery(5);
		$optionGalleryToDisplay6 	= $optionManager->getImgGallery(6);
		$optionGalleryToDisplay7 	= $optionManager->getImgGallery(7);
		$optionGalleryToDisplay8 	= $optionManager->getImgGallery(8);
		$optionGalleryToDisplay9 	= $optionManager->getImgGallery(9);
		
		//Soundcloud
		$optionSoundToDisplay 		= $optionManager->getSoundcloud();

		//TxtGallery
		$optionTxtGalToDisplay 		= $optionManager->getTxtGallery();

		//testimoniaux
			//view name
		$optionNameToDisplay1 		= $optionManager->getName(1);
		$optionNameToDisplay2 		= $optionManager->getName(2);
		$optionNameToDisplay3 		= $optionManager->getName(3);
		$optionBgTestiColor1 		= $optionManager->getBgTestiColor1();
		$optionBgTestiColor2 		= $optionManager->getBgTestiColor2();

		//view avatar
		$optionAvatarToDisplay1 	= $optionManager->getAvatar(1);
		$optionAvatarToDisplay2 	= $optionManager->getAvatar(2);
		$optionAvatarToDisplay3 	= $optionManager->getAvatar(3);


		$optionTestiToDisplay1 		= $optionManager->GetTestimonial(1);
		$optionTestiToDisplay2		= $optionManager->GetTestimonial(2);
		$optionTestiToDisplay3 		= $optionManager->GetTestimonial(3);
		
		//sextion_text
		$optionTextToDisplay1 		= $optionManager->getText(1);
		$optionTextToDisplay2 		= $optionManager->getText(2);
		$optionTextToDisplay3 		= $optionManager->getText(3);
		$optionBgTextColor1 		= $optionManager->getBgTextColor1();
		$optionBgTextColor2 		= $optionManager->getBgTextColor2();

		//sextion Maps
		$optionAdressToDisplay 		= $optionManager->getAdress();
		$optionLatToDisplay 		= $optionManager->getLat();
		$optionLonToDisplay 		= $optionManager->getLon();
		$optionBgMapColor1 			= $optionManager->getBgMapColor1();
		$optionBgMapColor2 			= $optionManager->getBgMapColor2();
		
		$this->show('Default/backoffice',[
			'names'				=> [$optionNameToDisplay1, $optionNameToDisplay2, $optionNameToDisplay3],
			'avatars'			=> [$optionAvatarToDisplay1, $optionAvatarToDisplay2, $optionAvatarToDisplay3],
			'testis'			=> [$optionTestiToDisplay1, $optionTestiToDisplay2, $optionTestiToDisplay3],
			'texts'				=> [$optionTextToDisplay1, $optionTextToDisplay2, $optionTextToDisplay3],
			'title'				=> [$optionTitleToDisplay],
			'imgslider' 		=> [$optionSliderToDisplay1, $optionSliderToDisplay2, $optionSliderToDisplay3, $optionSliderToDisplay4, $optionSliderToDisplay5],
			'imggallery'		=> [$optionGalleryToDisplay1, $optionGalleryToDisplay2, $optionGalleryToDisplay3, $optionGalleryToDisplay4, $optionGalleryToDisplay5, $optionGalleryToDisplay6, $optionGalleryToDisplay7, $optionGalleryToDisplay8, $optionGalleryToDisplay9],
			'txtgallery'		=> [$optionTxtGalToDisplay],
			'adress'			=> [$optionAdressToDisplay],
			'font'				=> [$optionFontToDisplay],
			'bg'				=> [$optionBgToDisplay],
			'direction'			=> [$optionBgGradientDirection],
			'gradiant_color1' 	=> [$optionBgGradientColor1],
			'gradiant_color2' 	=> [$optionBgGradientColor2],
			'adress'			=> [$optionAdressToDisplay],
			'soundcloud' 		=> [$optionSoundToDisplay],
			'col_testi_1'		=> [$optionBgTestiColor1],
			'col_testi_2'		=> [$optionBgTestiColor2],
			'col_text_1'		=> [$optionBgTextColor1],
			'col_text_2'		=> [$optionBgTextColor2],
			'col_map_1'			=> [$optionBgMapColor1],
			'col_map_2'			=> [$optionBgMapColor2],
			'lat'				=> [$optionLatToDisplay],
			'lon'				=> [$optionLonToDisplay],

		]);
	
		
	
	}

	public function register(){
		$this->show('default/register');
	}


	public function onepage()
	{
		$optionManager 	= new \Manager\OptionsManager();
		$userManager 	= new \Manager\UsersManager();
		
		// routing infos

		//header 
		$optionTitleToDisplay 		= $optionManager->getTitle();
		//Slider 
		$optionSliderToDisplay1 	= $optionManager->getImgSlider(1);
		$optionSliderToDisplay2 	= $optionManager->getImgSlider(2);
		$optionSliderToDisplay3 	= $optionManager->getImgSlider(3);
		$optionSliderToDisplay4 	= $optionManager->getImgSlider(4);
		$optionSliderToDisplay5 	= $optionManager->getImgSlider(5);

		//Gallery
		$optionGalleryToDisplay1 	= $optionManager->getImgGallery(1);
		$optionGalleryToDisplay2 	= $optionManager->getImgGallery(2);
		$optionGalleryToDisplay3 	= $optionManager->getImgGallery(3);
		$optionGalleryToDisplay4 	= $optionManager->getImgGallery(4);
		$optionGalleryToDisplay5 	= $optionManager->getImgGallery(5);
		$optionGalleryToDisplay6 	= $optionManager->getImgGallery(6);
		$optionGalleryToDisplay7 	= $optionManager->getImgGallery(7);
		$optionGalleryToDisplay8 	= $optionManager->getImgGallery(8);
		$optionGalleryToDisplay9 	= $optionManager->getImgGallery(9);
		
		$optionTxtGalToDisplay		= $optionManager->getTxtGallery();
		//Soundcloud
		$optionSoundToDisplay 		= $optionManager->getSoundcloud();

		//testimoniaux
		$optionBgTestiColor1 		= $optionManager->getBgTestiColor1();
		$optionBgTestiColor2 		= $optionManager->getBgTestiColor2();

		//header
		$optionTitleToDisplay 		= $optionManager->getTitle();
		$optionColorToDisplay 		= $optionManager->getColor();
		$optionFontToDisplay 		= $optionManager->getFont();
		$optionBgToDisplay 			= $optionManager->getBg();
		$optionBgGradientDirection 	= $optionManager->getBgGradientDirection();
		$optionBgGradientColor1 	= $optionManager->getBgGradientColor1();
		$optionBgGradientColor2 	= $optionManager->getBgGradientColor2();		

			//view name
		$optionNameToDisplay1 		= $optionManager->getName(1);
		$optionNameToDisplay2 		= $optionManager->getName(2);
		$optionNameToDisplay3 		= $optionManager->getName(3);

			//view avatar
		$optionAvatarToDisplay1 	= $optionManager->getAvatar(1);
		$optionAvatarToDisplay2 	= $optionManager->getAvatar(2);
		$optionAvatarToDisplay3 	= $optionManager->getAvatar(3);

			//view description
		$optionTestiToDisplay1 		= $optionManager->GetTestimonial(1);
		$optionTestiToDisplay2 		= $optionManager->GetTestimonial(2);
		$optionTestiToDisplay3 		= $optionManager->GetTestimonial(3);


		//sextion_text
		$optionTextToDisplay1 		= $optionManager->getText(1);
		$optionTextToDisplay2 		= $optionManager->getText(2);
		$optionTextToDisplay3 		= $optionManager->getText(3);
		$optionBgTextColor1 		= $optionManager->getBgTextColor1();
		$optionBgTextColor2 		= $optionManager->getBgTextColor2();
		//map
		$optionAdressToDisplay 		= $optionManager->getAdress();

		$optionLatToDisplay 		= $optionManager->getLat();
		$optionLonToDisplay 		= $optionManager->getLon();



		$optionBgMapColor1 			= $optionManager->getBgMapColor1();
		$optionBgMapColor2 			= $optionManager->getBgMapColor2();


		$emailToDisplay		  		= $optionManager->getMail();

		if(isset($_SESSION['errors'])) {
			$errors = $_SESSION['errors'];
		} else {
			$errors = array();
		}


		$this->show('default/onepage',[
			'names'				=> [$optionNameToDisplay1, $optionNameToDisplay2, $optionNameToDisplay3],
			'avatars'			=> [$optionAvatarToDisplay1, $optionAvatarToDisplay2, $optionAvatarToDisplay3],
			'testis'			=> [$optionTestiToDisplay1, $optionTestiToDisplay2, $optionTestiToDisplay3],
			'texts'				=> [$optionTextToDisplay1, $optionTextToDisplay2, $optionTextToDisplay3],
			'titledisplay'		=> [$optionTitleToDisplay],
			'imgslider' 		=> [$optionSliderToDisplay1, $optionSliderToDisplay2, $optionSliderToDisplay3, $optionSliderToDisplay4, $optionSliderToDisplay5],
			'imggallery'		=> [$optionGalleryToDisplay1, $optionGalleryToDisplay2, $optionGalleryToDisplay3, $optionGalleryToDisplay4, $optionGalleryToDisplay5, $optionGalleryToDisplay6, $optionGalleryToDisplay7, $optionGalleryToDisplay8, $optionGalleryToDisplay9],
			'txtgallery'		=> [$optionTxtGalToDisplay],
			'color'				=> [$optionColorToDisplay],
			'font'				=> [$optionFontToDisplay],
			'bg'				=> [$optionBgToDisplay],
			'direction'			=> [$optionBgGradientDirection],
			'gradiant_color1' 	=> [$optionBgGradientColor1],
			'gradiant_color2' 	=> [$optionBgGradientColor2],
			'adress'			=> [$optionAdressToDisplay],
			'soundcloud' 		=> [$optionSoundToDisplay],
			'col_testi_1'		=> [$optionBgTestiColor1],
			'col_testi_2'		=> [$optionBgTestiColor2],
			'col_text_1'		=> [$optionBgTextColor1],
			'col_text_2'		=> [$optionBgTextColor2],
			'col_map_1'			=> [$optionBgMapColor1],
			'col_map_2'			=> [$optionBgMapColor2],
			'lat'				=> [$optionLatToDisplay],
			'lon'				=> [$optionLonToDisplay],
			'mailrecipe' 		=> [$emailToDisplay],
			'errors'			=> $errors,

		]);

	}

	public function login()
	{
		function securise($string)
		{
		
		if(ctype_digit($string))
		{
			$string = intval($string);
		}
		
		else
		{
			$string = mysql_real_escape_string($string);
			$string = addcslashes($string, '%_');
			$string = htmlspecialchars($string); 
		}
		
		return $string;
		}

		if(isset($_POST['login-submit'])) {
			// Si on a reçu une soumission de formulaire

			if(!isset($_POST['login']) || empty($_POST['login']) || !isset($_POST['password']) || empty($_POST['password'])) {
				// S'il manque des informations

				$this->redirectToRoute('login');
			}

			$authManager = new \W\Security\AuthentificationManager();

			$login 		= securise($_POST['login']);
			$password 	= securise($_POST['password']);
			$userId 	= $authManager->isValidLoginInfo($login, $password);

			if($userId) {
				// Les infos sont coherentes
				$usersManager = new \Manager\UsersManager();
				$user = $usersManager->find($userId);
				
				unset($user['password']);

				// insertion des datas initiales en db
				

				// Enregistrement des infos utilisateur en session
				$authManager->logUserIn($user);



				$this->redirectToRoute('backoffice');


			}

			$this->show('Default/login', ['errorConnection' => true]);
		}
		
		$this->show('Default/login');
	}

	public function logoff()
	{
		$authManager = new \W\Security\AuthentificationManager();
		$authManager->logUserOut();
		$this->redirectToRoute('login');
	}

	//Fonction du controleur pour sauvergarder l'adresse en bdd
	// Controller Function to save the address in bdd
	public function saveAdress(){
				$optionManager = new \Manager\OptionsManager();
     		 	if(isset( $_POST["button"])){
					$address = securise($_POST['address']);
     		 		$optionManager -> saveAdress($address);
     		 		$optionManager -> saveLatLon($lat, $lon);
     		 	}

     		 	$this->redirectToRoute('backoffice');
	}

	public function getAdress(){
		$optionManager = new \Manager\OptionsManager();
		
		$address = securise($_POST['address']);
     	$adressToDisplay=$optionManager->getAdress($address);
     	$this->show('default/backoffice', ['currentadresse' => $adressToDisplay]);
	
	}

	/*
	* HEADER
	*/

	public function getDynpage($username){
		$usersManager = new \Manager\UsersManager();
		$page_nameToDis = $usersManager->usernameExists($username);
		if($page_nameToDis == true){
		$this->show('default/onepage', ['titledisplay' => $page_nameToDis]);
		}else {
			$this->showNotFound();
		}
	}

	/*
	* TESTIMONIAL
	*/
	//name
	public function UpdateName()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionUpNameToDisplay1 = $optionManager->UpName(1, $newName);
		$optionUpNameToDisplay2 = $optionManager->UpName(2, $newName);
		$optionUpNameToDisplay3 = $optionManager->UpName(3, $newName);
		$this->show('default/backoffice',['text'=>[$optionUpNameToDisplay1, $optionUpNameToDisplay2, $optionUpNameToDisplay3]]);
	}

	//avatar
	public function ChangeAva()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionChangeAvaToDisplay = $optionManager->changeAvatar($avatarNb, $newUrl);
		$this->show('default/backoffice',['backoffice'=>$optionChangeAvaToDisplay]);
	}
	
	public function SubAva()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionToDisplay = $optionManager->submitAvatar();
		$this->show('default/backoffice',['Submit'=>$optionToDisplay]);
	}

	//function description
	public function Uptesti()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionUpTestiToDisplay1 = $optionManager->UpdateTesti(1, $newText);
		$optionUpTestiToDisplay2= $optionManager->UpdateTesti(2, $newText);
		$optionUpTestiToDisplay3 = $optionManager->UpdateTesti(3, $newText);
		$this->show('default/backoffice',['Testi'=>[$optionUpTestiToDisplay1, $optionUpTestiToDisplay2, $optionUpTestiToDisplay3]]);
	}


	/*
	* SECTION_TEXT
	*/

	public function changeText()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionUpTextToDisplay1 = $optionManager->changeText(1, $newSecText);
		$optionUpTextToDisplay2= $optionManager->changeText(2, $newSecText);
		$optionUpTextToDisplay3 = $optionManager->changeText(3, $newSecText);
		$this->show('default/backoffice',['text'=>[$optionUpTextToDisplay1, $optionUpTextToDisplay2, $optionUpTextToDisplay3]]);
	}

	/*
	* CONTACT_FORM
	*/
	public function contact()
	{
		// $errName, $errEmail, $errMessage, $errHuman, $name, $email, $message, $human
		/*$_POST['name'];
		$_POST['email'];
		$_POST['message'];
		$_POST['human'];
		$_POST['errName'];
		$_POST['errEmail'];
		$_POST['errMessage'];*/
		
		// Si j'ai recu une soumission du formulaire mail
		// Si j'ai tous les champs
			// Si erreur dans

		$optionManager = new \Manager\OptionsManager();

		if (isset($_POST["send-mail"])) 
		{
	  		$name 		= securise($_POST['name']);
	  		$email 		= securise($_POST['email']);
	  		$message 	= securise($_POST['message']);
	 		$human 		= securise($_POST['human']);
	 	
	 		$errors = array();
	 
	 		// Check if name has been entered
	 		if (!isset($_POST['name']) || empty($_POST['name'])) {
	 			$errors['name'] = 'Please enter your name';
	 		}
	 		
	 		// Check if email has been entered and is valid
	 		//if (!isset($_POST['email']) || !filter_var(isset($_POST['email']), FILTER_VALIDATE_EMAIL)) {
	 		//	$errors['email'] = 'Please enter a valid email address';
	 		//}
	 		
	 		//Check if message has been entered
	 		if (!isset($_POST['message'])) {
	 			$errors['message'] = 'Please enter your message';
	 		}
	 		//Check if simple anti-bot test is correct
	 		if ($human !== 5) {
	 			$errors['human'] = 'Your anti-spam is incorrect';
	 		}
	 
		 // If there are no errors, send the email
			/*if (!$errName && !$errEmail && !$errMessage && !$errHuman)
			{
			 	if (mail ($to, $subject, $body, $from))
			 	{
			 		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
			 	}
			 	else
			 	{
			 		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
			 	}
			}*/

			$_SESSION['errors'] = $errors;

			if(empty($errors)) {

				//$completeMessage = 'Vous avez recu un mail de ' .$email ;

				$this->mailer($name, $email, $message);
			}

	 		$this->redirectToRoute('onepage');
	 	}
	}


	public function getMail()
	{
		$optionManager = new \Manager\OptionsManager();

		if (isset($_POST['submit_mail']) && isset($_POST['email_contact']) && isset($_POST['password_mail']) ) 
		{
			echo 'Vous avez bien enregistré votre adresse et votre mot de passe';	
		}
		else
		{
			echo 'Il doit manquer une donné au formulaire';
		}
	}

	private function mailer($name, $email, $message)
	{
		$optionManager = new \Manager\OptionsManager();
		$mailrecipe = $optionManager->getMail();
		$mail = new \PHPMailer();
		// $email and $message are the data that is being
		// posted to this page from our html contact form
		//$email = '' ;
		
			$completeMessage 	= 'Vous avez recu un mail de ' .$email ;
		//$mail->SMTPDebug = 2;
		$mail->isSMTP();                                      				// Set mailer to use SMTP
		$mail->Host 			= 'smtp.gmail.com';  						// Specify main and backup SMTP servers
		$mail->SMTPAuth 		= true;                               		// Enable SMTP authentication
		$mail->Username 		=  'one.page.editor@gmail.com';         	// SMTP username
		$mail->Password 		=  'oveonepageeditor';            			// SMTP password
		$mail->SMTPSecure 		= 'tls';                            		// Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    				// TCP port to connect to
		$mail->setFrom($email);

		// below we want to set the email address we will be sending our email to.
		$mail->AddAddress($mailrecipe);
		$mail->addReplyTo('');
		$mail->addCC('');
		$mail->addBCC('');

		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Message recu depuis votre site OVE.';
		$mail->Body    = $message."<br><br>". $completeMessage;
		$mail->AltBody = $message;

		if(!$mail->send())
		{
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
		}

		echo "Message has been sent";
		$this->redirectToRoute('onepage');
	}

	
}