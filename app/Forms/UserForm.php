<<<<<<< HEAD
<?php

namespace CodeFlix\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $id = $this->getData('id');
        $this
            ->add('name', 'text',[
                'label' => 'Nome',
                'rules' => 'required|max:255',
            ])
            ->add('email', 'email',[
                'label' => 'E-mail',
                'rules' => "required|max:255|unique:users,email,$id",
            ]);
    }
}
=======
<?php

namespace CodeFlix\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $id = $this->getData('id');
        $this
            ->add('name', 'text',[
                'label' => 'Nome',
                'rules' => 'required|max:255',
            ])
            ->add('email', 'email',[
                'label' => 'E-mail',
                'rules' => "required|max:255|unique:users,email,$id",
            ]);
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
