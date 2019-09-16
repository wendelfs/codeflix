<<<<<<< HEAD
<?php

namespace CodeFlix\Media;


trait ThumbsData
{
    public function getThumbs()
    {
        return new \Illuminate\Support\Collection([
            new \Illuminate\Http\UploadedFile(
                storage_path('app/files/faker/thumbs/teste.jpg'),
                'teste.jpg'
            ),
        ]);
    }
=======
<?php

namespace CodeFlix\Media;


trait ThumbsData
{
    public function getThumbs()
    {
        return new \Illuminate\Support\Collection([
            new \Illuminate\Http\UploadedFile(
                storage_path('app/files/faker/thumbs/teste.jpg'),
                'teste.jpg'
            ),
        ]);
    }
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
}