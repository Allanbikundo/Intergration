<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{


    public function fileUpload()

    {

        return view('pages/fileUpload');

    }


    public function FileUploadPost()

    {
        $fileName = time() . '.' . request()->file->getClientOriginalExtension();
        $extension = explode(".", $fileName);
        if ($extension[1] != "csv") {
            return back()
                ->with('Fail', 'The file extension ' . "$extension[1]" . 'is not accepted')

                ->with($fileName);
        } else {

            //save the downloaded file to a public path
            request()->file->move(public_path('files'), $fileName);

            $path = 'files/' . $fileName;
            //check if the json file exists
            if (file_exists('files/map.json')) {
                //check if the uploaded file has been saved
                if (file_exists($path)) {
                    //give it an appropirate function
                    switch ($extension[1]) {
                        case 'csv':
                            $fp = fopen($path, 'r');

                        //get the headrow
                            $head = fgetcsv($fp, 4096, ';', '"');

                            $arr = explode(",", implode("<p> ", array($head[0])) . "</p> ");

                            for ($i = 0; $i < sizeof($arr); $i++) {
                                switch ($arr[$i]) {
                                    case 'ID':
                                        $data = file_get_contents("files/map.json");
                                        $data = json_decode($data, true);
                                        foreach ($data as $row) {
                                            $noid = "<br><p>" . $row['ihris'] . " maps to " . $row['dhis2'] . "</p>";
                                        }
                                        return back()
                                                ->with('success', 'it works csv switch' . $noid);
                                    case 'name':
                                       // mapName();
                                        break;
                                    default:
                                        //mapUnknown();
                                        break;
                                }
                            }

                            while ($column = fgetcsv($fp, 4096, ';', '"')) {
                            // This is a great trick, to get an associative row by combining the headrow with the content-rows.
                                $column = array_combine($head, $column);
                            //var_dump($column);
                            }
                            return back()
                                ->with('success', 'it works csv switch' . $column);
                        default:
                            # code...
                            break;
                    }
                    return back()
                        ->with('success', 'it works ' . $extension[1]);
                } else {
                    return back()
                        ->with('success', 'it doesnt work');
                }
                return back()

                    ->with('success', 'the json map file exists bruh');
            } else {
                return back()

                    ->with('fail', 'the json map file exists bruh');
            }
            request()->file->move(public_path('images'), $fileName);
            return back()

                ->with('success', 'You have successfully uploaded the file ' . "$extension[1]")

                ->with($fileName);
        }
    }
}
