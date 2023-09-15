<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class ImageInterceptorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   public function handle($request, Closure $next)
    {
        $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/jpg','application/pdf'];
		$allowedExtentions = array("pdf", "gif", "jpeg", "jpg", "png");
        foreach (array_flatten($request->files->all()) as $file) {
			//$fileType = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $_FILES['file']['tmp_name']);
			
            $size = $file->getClientSize(); // size in bytes!
             //$contentType1 = $file('import')->getPathName();
				$contentType = $file->getClientMimeType();
          // dd($contentType);
			//$request->sampleimg = $contentType1;

            $onemb = 2*(pow(1024,2)); // https://stackoverflow.com/a/2510446/6056864
			$file_array = explode(".",$file->getClientOriginalName());

			$input_file = $file->getClientOriginalName();
			$file_extension = pathinfo($input_file, PATHINFO_EXTENSION);
			//$is_valid = $file->isValid();
			//$realpath = file_get_contents($file->getRealPath());
			$mimetype = mime_content_type($file->getRealPath());
			//dd(substr($realpath,0,5));
			//dd($filesize);

			if(count($file_array) !== 2){

				abort(401, 'This action is unauthorized.');
                 return redirect()->back();

			}

             if(!in_array($contentType, $allowedMimeTypes) || !in_array($mimetype, $allowedMimeTypes) ){
                //abort(Response::HTTP_UNPROCESSABLE_ENTITY);
                 abort(401, 'This action is unauthorized.');
                 return redirect()->back();
                 //return redirect('/');
            }

               if (!in_array($file_extension, $allowedExtentions)) {
               // abort(Response::HTTP_UNPROCESSABLE_ENTITY);
                 abort(401, 'This action is unauthorized.');
                 return redirect()->back();
                  //return redirect('/');
            } 

            if ($size > $onemb) {
               // abort(Response::HTTP_UNPROCESSABLE_ENTITY);
                 abort(401, 'This action is unauthorized.');
                 return redirect()->back();
                  //return redirect('/');
            }
        }

        return $next($request);
           
           
    }
}
