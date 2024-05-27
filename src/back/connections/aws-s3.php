<?php 
  require '../../vendor/autoload.php';

  use Aws\S3\S3Client;
  use Dotenv\Dotenv;

  $dotenv = Dotenv::createUnsafeImmutable('../../');
  $dotenv->load();


  $s3Client = new S3Client([
    "region" => 'us-east-1'
  ]);

  // $awsEnv = getenv('AWS_ACCESS_KEY_ID');
  // echo $awsEnv;

  $objects = $s3Client->getIterator('ListObjects', array(
    "Bucket" => 'biblioteca-fmu',
    // "Prefix" => 'folder/' //must have the trailing forward slash "/"
));

foreach ($objects as $object) {
  echo $object['Key'] . "<br>";
}

//   $buckets = $s3Client->listBuckets();
//     foreach ($buckets['Buckets'] as $bucket) {
//     echo $bucket['Name'] . "\n";
// }
