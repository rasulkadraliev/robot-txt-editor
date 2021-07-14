<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class EditorController
 * @package App\Http\Controllers\
 */
class EditorController extends Controller
{
    public $filename = 'robots.txt';
    public $file_content = "";

    public function openFile() {

        if (!realpath($this->filename)) {
            echo '<script>alert("File robots.txt doesn\'t exist. You can create a new file")</script>';
        } else {
            $this->file_content = file_get_contents($this->filename);
        }
        return view('kadraliev.robottxteditor.views.edit-form', ['file_content' => $this->file_content,]);
    }

    public function saveFile(Request $request) {
        if (empty($request->text))
            echo '<script>alert("Attention: File is empty! Saving empty file.")</script>';

        $new_file = fopen($this->filename, "w") or die ("Unable to open file!");
        fwrite($new_file, $request->text);

        echo '<script>alert("Your robots.txt file is saved")</script>';

        return view('kadraliev.robottxteditor.views.edit-form', ['file_content' => $this->file_content,]);
    }

}
