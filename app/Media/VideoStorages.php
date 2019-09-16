<<<<<<< HEAD
<?php

namespace CodeFlix\Media;

use Illuminate\Filesystem\FilesystemAdapter;

trait VideoStorages
{
    /**
     * @return FilesystemAdapter
     */
    public function getStorageDisk()
    {
        return \Storage::disk($this->getStorageDiskDriver());
    }

    protected function getStorageDiskDriver()
    {
        return config('filesystems.default');
    }

    protected function getAbsolutePath(FilesystemAdapter $storage, $fileRelativePath){
        return $this->isLocalDriver() ?
            $storage->getDriver()->getAdapter()->applyPathPrefix($fileRelativePath)
            : $storage->url($fileRelativePath);
    }

    protected function isLocalDriver()
    {
        $driver = config("filesystems.disks.{$this->getStorageDiskDriver()}.driver");
        return $driver == 'local';
    }
=======
<?php

namespace CodeFlix\Media;

use Illuminate\Filesystem\FilesystemAdapter;

trait VideoStorages
{
    /**
     * @return FilesystemAdapter
     */
    public function getStorageDisk()
    {
        return \Storage::disk($this->getStorageDiskDriver());
    }

    protected function getStorageDiskDriver()
    {
        return config('filesystems.default');
    }

    protected function getAbsolutePath(FilesystemAdapter $storage, $fileRelativePath){
        return $this->isLocalDriver() ?
            $storage->getDriver()->getAdapter()->applyPathPrefix($fileRelativePath)
            : $storage->url($fileRelativePath);
    }

    protected function isLocalDriver()
    {
        $driver = config("filesystems.disks.{$this->getStorageDiskDriver()}.driver");
        return $driver == 'local';
    }
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
}