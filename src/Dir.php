<?php

namespace PHP\Wrappers;

use Directory;

/**
 * Class Dir
 *
 * @package PHP\Wrappers
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Dir
{
    /**
     * Change directory
     *
     * @param string $directory The new current directory
     *
     * @return bool
     */
    public function chDir(string $directory) : bool
    {
        return chdir($directory);
    }

    /**
     * Change the root directory
     *
     * @param string $directory The path to change the root directory to.
     *
     * @return bool
     */
    public function chroot(string $directory) : bool
    {
        return chroot($directory);
    }

    /**
     * Close directory handle
     *
     * @param resource $dirHandle The directory handle resource previously opened
     *                            with opendir. If the directory handle is
     *                            not specified, the last link opened by opendir
     *                            is assumed.
     *
     * @return void
     */
    public function closeDir($dirHandle = null)
    {
        call_user_func_array('closedir', func_get_args());
    }

    /**
     * Return an instance of the Directory class
     *
     * @param string   $directory
     * @param resource $context
     *
     * @return Directory
     */
    public function dir(string $directory, $context = null) : Directory
    {
        return call_user_func_array('dir', func_get_args());
    }

    /**
     * Gets the current working directory
     *
     * @return string
     */
    public function getcwd() : string
    {
        return getcwd();
    }

    /**
     * Open directory handle
     *
     * @param string   $path    The directory path that is to be opened
     * @param resource $context For a description of the context parameter,
     *                          refer to the streams section of
     *                          the manual.
     *
     * @return resource
     */
    public function openDir(string $path, $context = null)
    {
        return call_user_func_array('opendir', func_get_args());
    }

    /**
     * Read entry from directory handle
     *
     * @param resource $dirHandle The directory handle resource previously opened
     *                            with opendir. If the directory handle is
     *                            not specified, the last link opened by opendir
     *                            is assumed.
     *
     * @return string
     */
    public function readdDr($dirHandle = null) : string
    {
        return call_user_func_array('readdir', func_get_args());
    }

    /**
     * Rewind directory handle
     *
     * @param resource $dirHandle The directory handle resource previously opened
     *                            with opendir. If the directory handle is
     *                            not specified, the last link opened by opendir
     *                            is assumed.
     *
     * @return void
     */
    public function rewindDir($dirHandle = null)
    {
        call_user_func_array('rewinddir', func_get_args());
    }

    /**
     * List files and directories inside the specified path
     *
     * @param string   $directory    The directory that will be scanned.
     * @param int      $sortingOrder By default, the sorted order is alphabetical in ascending order.  If
     *                               the optional sorting_order is set to
     *                               SCANDIR_SORT_DESCENDING, then the sort order is
     *                               alphabetical in descending order. If it is set to
     *                               SCANDIR_SORT_NONE then the result is unsorted.
     * @param resource $context      For a description of the context parameter,
     *                               refer to the streams section of
     *                               the manual.
     *
     * @return array
     */
    public function scanDir(string $directory, int $sortingOrder = null, $context = null) : array
    {
        return call_user_func_array('scandir', func_get_args());
    }

}

