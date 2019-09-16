<<<<<<< HEAD
<?php

namespace CodeFlix\Forms;

use Kris\LaravelFormBuilder\Form;

class CategoryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'label' => 'Nome',
                'rules' => 'required|max:255',
            ]);
    }
}
=======
<?php

namespace CodeFlix\Forms;

use Kris\LaravelFormBuilder\Form;

class CategoryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'label' => 'Nome',
                'rules' => 'required|max:255',
            ]);
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
