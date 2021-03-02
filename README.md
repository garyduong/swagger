# swagger
This repository contains source code of the Swagger Davis website.

# Usage

The directory-tree is as follows.

	/
	  index.php
	  config.ini
	  README.md
	  static/
	    images
	    css files
	    js files
	  recaptcha/
	  PHPMailer/
	  resources/
	    ps files

`index.php` contains HTML for the front-page of the website, with PHP snippets that are executed upon conditions set by the feedback-form. Helpful comments are included. Read them.

If you are able, move `index.php` and `config.ini` outside the web-root with appropriate permissions. The `static/` directory holds assets for site functionality, like images and stylesheets/scripts executed at runtime.

Of interest is the `resources/` directory. This contains all Photoshop files used to make the images. You may remove this directory as needed. It isn't pertinent to the functionality of the website, except the exported images.

This website runs on PHP. You will need to configure your own LAMP stack. For the impatient or those who like one-click installations, I recommend MAMP. It is available for both Windows and OS X.

  1. Download MAMP at https://www.mamp.info/en/.
  2. Read the [documentation](https://documentation.mamp.info/en/documentation/mamp/). In particular, read Section 3.4 on setting up your document-root, relative to the web-server. Install it.
  3. Set your document-root to point to where you have downloaded and extracted the compressed file. Run MAMP, click *Start Servers*, and click *Open WebStart Page*.

# Notes

This website uses two PHP libraries: [reCAPTCHA ](https://www.google.com/recaptcha/intro/index.html), a superior CAPTCHA implementation by Google, and [PHPMailer](https://github.com/PHPMailer/PHPMailer) for sending messages via feedback form. You will need to clone the repositories.

	git clone https://github.com/google/recaptcha
	git clone https://github.com/PHPMailer/PHPMailer
