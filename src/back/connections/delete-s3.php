<?php 
  require 'C:\xampp\htdocs\biblioteca\vendor\autoload.php';

  use Aws\S3\S3Client;
  use Aws\Exception\MultipartUploadException;
  use Aws\S3\MultipartUploader;
  use Aws\S3\ObjectUploader;

  use Dotenv\Dotenv;

  $dotenv = Dotenv::createUnsafeImmutable('C:\xampp\htdocs\biblioteca');
  $dotenv->load();

  $s3Client = new S3Client([
    "region" => 'us-east-1'
  ]);

  // $uploader = new ObjectUploader(
  //   $s3Client,
  //   "biblioteca-fmu",
  //   "teste.jpg",
  //   $_FILES["cover"]["tmp_name"]
  // );

//  echo $_POST['id'];

  $result = $s3Client->deleteObject([
    'Bucket' => 'biblioteca-fmu',
    'Key' => $_GET['id'] . ".jpg",
  ]);
