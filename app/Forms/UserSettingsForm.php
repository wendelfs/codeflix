<<<<<<< HEAD
<?php

namespace CodeFlix\Forms;

use Kris\LaravelFormBuilder\Form;

class UserSettingsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('password', 'password',[
                'label' => 'Senha',
                'rules' => 'required|min:6|max:16|confirmed',
            ])
            ->add('password_confirmation','password',[
                'label' => 'Confirme a senha'
            ]);
    }
}
=======
<?php

namespace CodeFlix\Forms;

use Kris\LaravelFormBuilder\Form;

class UserSettingsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('password', 'password',[
                'label' => 'Senha',
                'rules' => 'required|min:6|max:16|confirmed',
            ])
            ->add('password_confirmation','password',[
                'label' => 'Confirme a senha'
            ]);
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
