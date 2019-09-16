<<<<<<< HEAD
<?php

namespace CodeFlix\Forms;

use CodeFlix\Models\Category;
use CodeFlix\Models\Serie;
use Kris\LaravelFormBuilder\Form;

class VideoUploadForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('thumb','file',[
                'required' => false,
                'label' => 'Capa',
                'rules' => 'image|max:2048',
            ])
             ->add('file','file',[
                'required' => false,
                'label' => 'Arquivo de vídeo',
                'rules' => 'mimetypes:video/mp4',
            ])
            ->add('duration','text',[
                'label' => 'Duração',
                'rules' => 'required|integer|min:1',
            ]);

    }
}
=======
<?php

namespace CodeFlix\Forms;

use CodeFlix\Models\Category;
use CodeFlix\Models\Serie;
use Kris\LaravelFormBuilder\Form;

class VideoUploadForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('thumb','file',[
                'required' => false,
                'label' => 'Capa',
                'rules' => 'image|max:2048',
            ])
             ->add('file','file',[
                'required' => false,
                'label' => 'Arquivo de vídeo',
                'rules' => 'mimetypes:video/mp4',
            ])
            ->add('duration','text',[
                'label' => 'Duração',
                'rules' => 'required|integer|min:1',
            ]);

    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
