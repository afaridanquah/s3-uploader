# s3-uploader

#Installation
composer require dafari/uploader

In your config/app.php

Add Nextek\Uploader\UploaderServiceProvider::class to your providers
Add 'Uploader' => Nextek\Uploader\UploadFacade::class, to your alias


#Usage
Uploader::store(file);
