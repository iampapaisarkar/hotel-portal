<?php

namespace App\Http\Service;
use Illuminate\Support\Facades\Auth;
use File;
use Storage;
use Session;
use DB;
use URL;

class FileUpload
{
    private $image_allowed_mimes = ['image/bmp', 'image/gif', 'image/jpeg', 'image/tiff', 'image/png'];

    public static function upload($file, $private = false, $type = null, $doc_type = null){

        if($private === true){

            if($type == 'hospital_pharmacy'){
                $private_storage_path = storage_path(
                    'app'. DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . Auth::user()->id . DIRECTORY_SEPARATOR . 'hospital_pharmacy'
                );

                if(!file_exists($private_storage_path)){
                    \mkdir($private_storage_path, intval('755',8), true);
                }
            }

            if($type == 'ppmv'){
                $private_storage_path = storage_path(
                    'app'. DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . Auth::user()->id . DIRECTORY_SEPARATOR . 'ppmv'
                );

                if(!file_exists($private_storage_path)){
                    \mkdir($private_storage_path, intval('755',8), true);
                }
            }

            if($type == 'company'){
                $private_storage_path = storage_path(
                    'app'. DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . Auth::user()->id . DIRECTORY_SEPARATOR . 'company'
                );

                if(!file_exists($private_storage_path)){
                    \mkdir($private_storage_path, intval('755',8), true);
                }
            }

            // $file_name = $file->getClientOriginalName();
            $file_name = 'vendor'.Auth::user()->id.'-'.$doc_type.'.'.$file->getClientOriginalExtension();
            $file->move($private_storage_path, $file_name);

            return $file_name;
        }else{
            $default_storage_path = storage_path('app'. DIRECTORY_SEPARATOR . 'public'. DIRECTORY_SEPARATOR . 'documents');
            if(!file_exists($default_storage_path)){
                mkdir($default_storage_path, intval('755',8), true);
            }
            $file_name = $file->getClientOriginalName();
            $file->move($default_storage_path, $file_name);
            return $file_name;
        }
    }


}