<?php


if($request->hasfile('filename')) // if filename is specified
{
    foreach($request->file('filename') as $file) // foreach filename
    {
        $name = time() .'_'. $file->getClientOriginalName(); // name of the file
        $data[] = $file->storeAs( // push of file in storage
            'supports', // folder in storage to modify by folder name
            $name, // name of the file
            'public', // public or local file
        );  
    }            
    $allParams['filepath'] = json_encode($data); // push in database 
}

                                //next
// dd($allparams); // for test 
//Support::create($allParams); // Support mofify by Models target 
//return redirect('mysupports'); //redirect to the page to modify by blade name
