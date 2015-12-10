<?php

namespace PHP\Wrappers;

/**
 * Class Filesystem
 *
 * @package PHP\Wrappers
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Filesystem
{
    /**
     * Returns trailing name component of path
     *
     * @param string $path   A path.
     * @param string $suffix If the name component ends in suffix this will also
     *                       be cut off.
     *
     * @return string
     */
    public function basename(string $path, string $suffix = null) : string
    {
        return call_user_func_array('basename', func_get_args());
    }

    /**
     * Changes file group
     *
     * @param string $filename Path to the file.
     * @param mixed  $group    A group name or number.
     *
     * @return bool
     */
    public function chgrp(string $filename, $group) : bool
    {
        return chgrp($filename, $group);
    }

    /**
     * Changes file mode
     *
     * @param string $filename Path to the file.
     * @param int    $mode     Note that mode is not automatically
     *                         assumed to be an octal value, so to ensure the expected operation,
     *                         you need to prefix mode with a zero (0).
     *                         Strings such as "g+w" will not work properly.
     *
     * @return bool
     */
    public function chmod(string $filename, int $mode) : bool
    {
        return chmod($filename, $mode);
    }

    /**
     * Changes file owner
     *
     * @param string $filename Path to the file.
     * @param mixed  $user     A user name or number.
     *
     * @return bool
     */
    public function chown(string $filename, $user) : bool
    {
        return chown($filename, $user);
    }

    /**
     * Clears file status cache
     *
     * @param bool   $clearRealpathCache Whether to clear the realpath cache or not.
     * @param string $filename           Clear the realpath and the stat cache for a specific filename only; only
     *                                   used if $clearRealpathCache is .
     *
     * @return void
     */
    public function clearStatCache(bool $clearRealpathCache = null, string $filename = null)
    {
        call_user_func_array('clearstatcache', func_get_args());
    }

    /**
     * Copies file
     *
     * @param string   $source  Path to the source file.
     * @param string   $dest    The destination path. If dest is a URL, the
     *                          copy operation may fail if the wrapper does not support overwriting of
     *                          existing files.
     * @param resource $context A valid context resource created with
     *                          stream_context_create.
     *
     * @return bool
     */
    public function copy(string $source, string $dest, $context = null) : bool
    {
        return call_user_func_array('copy', func_get_args());
    }

    /**
     * Returns a parent directory's path
     *
     * @param string $path   A path.
     * @param int    $levels The number of parent directories to go up.
     *
     * @return string
     */
    public function dirName(string $path, int $levels = null) : string
    {
        return call_user_func_array('dirname', func_get_args());
    }

    /**
     * Returns available space on filesystem or disk partition
     *
     * @param string $directory A directory of the filesystem or disk partition.
     *
     * @return float
     */
    public function diskFreeSpace(string $directory) : float
    {
        return disk_free_space($directory);
    }

    /**
     * Returns the total size of a filesystem or disk partition
     *
     * @param string $directory A directory of the filesystem or disk partition.
     *
     * @return float
     */
    public function diskTotalSpace(string $directory) : float
    {
        return disk_total_space($directory);
    }

    /**
     * Closes an open file pointer
     *
     * @param resource $handle The file pointer must be valid, and must point to a file successfully
     *                         opened by fopen or fsockopen.
     *
     * @return bool
     */
    public function fclose($handle) : bool
    {
        return fclose($handle);
    }

    /**
     * Tests for end-of-file on a file pointer
     *
     * @param resource $handle
     *
     * @return bool
     */
    public function feof($handle) : bool
    {
        return feof($handle);
    }

    /**
     * Flushes the output to a file
     *
     * @param resource $handle
     *
     * @return bool
     */
    public function fflush($handle) : bool
    {
        return fflush($handle);
    }

    /**
     * Gets character from file pointer
     *
     * @param resource $handle
     *
     * @return string
     */
    public function fgetc($handle) : string
    {
        return fgetc($handle);
    }

    /**
     * Gets line from file pointer and parse for CSV fields
     *
     * @param resource $handle    A valid file pointer to a file successfully opened by
     *                            fopen, popen, or
     *                            fsockopen.
     * @param int      $length    Must be greater than the longest line (in characters) to be found in
     *                            the CSV file (allowing for trailing line-end characters). It became
     *                            optional in PHP 5. Omitting this parameter (or setting it to 0 in PHP
     *                            5.1.0 and later) the maximum line length is not limited, which is
     *                            slightly slower.
     * @param string   $delimiter The optional delimiter parameter sets the field delimiter (one character only).
     * @param string   $enclosure The optional enclosure parameter sets the field enclosure character (one character
     *                            only).
     * @param string   $escape    The optional escape parameter sets the escape character (one character only).
     *
     * @return array
     */
    public function fgetcsv(
        $handle,
        int $length = null,
        string $delimiter = null,
        string $enclosure = null,
        string $escape = null
    ) : array {
        return call_user_func_array('fgetcsv', func_get_args());
    }

    /**
     * Gets line from file pointer
     *
     * @param resource $handle
     * @param int      $length Reading ends when length - 1 bytes have been
     *                         read, or a newline (which is included in the return value), or an EOF
     *                         (whichever comes first). If no length is specified, it will keep
     *                         reading from the stream until it reaches the end of the line.
     *
     * @return string
     */
    public function fgets($handle, int $length = null) : string
    {
        return call_user_func_array('fgets', func_get_args());
    }

    /**
     * Gets line from file pointer and strip HTML tags
     *
     * @param resource $handle
     * @param int      $length        Length of the data to be retrieved.
     * @param string   $allowableTags You can use the optional third parameter to specify tags which should
     *                                not be stripped.
     *
     * @return string
     */
    public function fgetss($handle, int $length = null, string $allowableTags = null) : string
    {
        return call_user_func_array('fgetss', func_get_args());
    }

    /**
     * Checks whether a file or directory exists
     *
     * @param string $filename Path to the file or directory.
     *
     * @return bool
     */
    public function fileExists(string $filename) : bool
    {
        return file_exists($filename);
    }

    /**
     * Reads entire file into a string
     *
     * @param string   $filename Name of the file to read.
     * @param bool     $useIncludePath
     * @param resource $context  A valid context resource created with
     *                           stream_context_create. If you don't need to use a
     *                           custom context, you can skip this parameter by .
     * @param int      $offset   The offset where the reading starts on the original stream.
     * @param int      $maxlen   Maximum length of data read. The default is to read until end
     *                           of file is reached. Note that this parameter is applied to the
     *                           stream processed by the filters.
     *
     * @return string
     */
    public function fileGetContents(
        string $filename,
        bool $useIncludePath = null,
        $context = null,
        int $offset = null,
        int $maxlen = null
    ) : string {
        return call_user_func_array('file_get_contents', func_get_args());
    }

    /**
     * Write a string to a file
     *
     * @param string   $filename Path to the file where to write the data.
     * @param mixed    $data     The data to write. Can be either a string, an
     *                           array or a stream resource.
     * @param int      $flags    The value of flags can be any combination of
     *                           the following flags, joined with the binary OR (|)
     *                           operator.
     * @param resource $context  A valid context resource created with
     *                           stream_context_create.
     *
     * @return int
     */
    public function filePutContents(string $filename, $data, int $flags = null, $context = null) : int
    {
        return call_user_func_array('file_put_contents', func_get_args());
    }

    /**
     * Reads entire file into an array
     *
     * @param string   $filename Path to the file.
     * @param int      $flags    The optional parameter flags can be one, or
     *                           more, of the following constants:
     *
     *
     *
     * FILE_USE_INCLUDE_PATH
     *
     *
     *
     * Search for the file in the include_path.
     *
     *
     *
     *
     *
     * FILE_IGNORE_NEW_LINES
     *
     *
     *
     * Do not add newline at the end of each array element
     *
     *
     *
     *
     *
     * FILE_SKIP_EMPTY_LINES
     *
     *
     *
     * Skip empty lines
     * @param resource $context  A context resource created with the
     *                           stream_context_create function.
     *
     * @return array
     */
    public function file(string $filename, int $flags = null, $context = null) : array
    {
        return call_user_func_array('file', func_get_args());
    }

    /**
     * Gets last access time of file
     *
     * @param string $filename Path to the file.
     *
     * @return int
     */
    public function fileatime(string $filename) : int
    {
        return fileatime($filename);
    }

    /**
     * Gets inode change time of file
     *
     * @param string $filename Path to the file.
     *
     * @return int
     */
    public function filectime(string $filename) : int
    {
        return filectime($filename);
    }

    /**
     * Gets file group
     *
     * @param string $filename Path to the file.
     *
     * @return int
     */
    public function fileroup(string $filename) : int
    {
        return filegroup($filename);
    }

    /**
     * Gets file inode
     *
     * @param string $filename Path to the file.
     *
     * @return int
     */
    public function fileinode(string $filename) : int
    {
        return fileinode($filename);
    }

    /**
     * Gets file modification time
     *
     * @param string $filename Path to the file.
     *
     * @return int
     */
    public function filemtime(string $filename) : int
    {
        return filemtime($filename);
    }

    /**
     * Gets file owner
     *
     * @param string $filename Path to the file.
     *
     * @return int
     */
    public function fileowner(string $filename) : int
    {
        return fileowner($filename);
    }

    /**
     * Gets file permissions
     *
     * @param string $filename Path to the file.
     *
     * @return int
     */
    public function fileperms(string $filename) : int
    {
        return fileperms($filename);
    }

    /**
     * Gets file size
     *
     * @param string $filename Path to the file.
     *
     * @return int
     */
    public function filesize(string $filename) : int
    {
        return filesize($filename);
    }

    /**
     * Gets file type
     *
     * @param string $filename Path to the file.
     *
     * @return string
     */
    public function filetype(string $filename) : string
    {
        return filetype($filename);
    }

    /**
     * Portable advisory file locking
     *
     * @param resource $handle
     * @param int      $operation  operation is one of the following:
     *
     *
     *
     * LOCK_SH to acquire a shared lock (reader).
     *
     *
     *
     *
     * LOCK_EX to acquire an exclusive lock (writer).
     *
     *
     *
     *
     * LOCK_UN to release a lock (shared or exclusive).
     * @param int      $wouldblock The optional third argument is set to 1 if the lock would block
     *                             (EWOULDBLOCK errno condition).
     *
     * @return bool
     */
    public function flock($handle, int $operation, int &$wouldblock = null) : bool
    {
        return call_user_func_array('flock', func_get_args());
    }

    /**
     * Match filename against a pattern
     *
     * @param string $pattern The shell wildcard pattern.
     * @param string $string  The tested string. This function is especially useful for filenames,
     *                        but may also be used on regular strings.
     * @param int    $flags   The value of flags can be any combination of
     *                        the following flags, joined with the
     *                        binary OR (|) operator.
     *
     *
     * A list of possible flags for fnmatch
     *
     *
     *
     *
     * Flag
     * Description
     *
     *
     *
     *
     * FNM_NOESCAPE
     *
     * Disable backslash escaping.
     *
     *
     *
     * FNM_PATHNAME
     *
     * Slash in string only matches slash in the given pattern.
     *
     *
     *
     * FNM_PERIOD
     *
     * Leading period in string must be exactly matched by period in the given pattern.
     *
     *
     *
     * FNM_CASEFOLD
     *
     * Caseless match. Part of the GNU extension.
     *
     * @return bool
     */
    public function fnmatch(string $pattern, string $string, int $flags = null) : bool
    {
        return call_user_func_array('fnmatch', func_get_args());
    }

    /**
     * Opens file or URL
     *
     * @param string   $filename       If filename is of the form "scheme://...", it
     *                                 is assumed to be a URL and PHP will search for a protocol handler
     *                                 (also known as a wrapper) for that scheme. If no wrappers for that
     *                                 protocol are registered, PHP will emit a notice to help you track
     *                                 potential problems in your script and then continue as though
     *                                 filename specifies a regular file.
     * @param string   $mode           The mode parameter specifies the type of access
     *                                 you require to the stream.  It may be any of the following:
     *
     *
     * A list of possible modes for fopen
     * using mode
     *
     *
     *
     *
     * mode
     * Description
     *
     *
     *
     *
     * 'r'
     *
     * Open for reading only; place the file pointer at the
     * beginning of the file.
     *
     *
     *
     * 'r+'
     *
     * Open for reading and writing; place the file pointer at
     * the beginning of the file.
     *
     *
     *
     * 'w'
     *
     * Open for writing only; place the file pointer at the
     * beginning of the file and truncate the file to zero length.
     * If the file does not exist, attempt to create it.
     *
     *
     *
     * 'w+'
     *
     * Open for reading and writing; place the file pointer at
     * the beginning of the file and truncate the file to zero
     * length.  If the file does not exist, attempt to create it.
     *
     *
     *
     * 'a'
     *
     * Open for writing only; place the file pointer at the end of
     * the file. If the file does not exist, attempt to create it.
     * In this mode, fseek only affects
     * the reading position, writes are always appended.
     *
     *
     *
     * 'a+'
     *
     * Open for reading and writing; place the file pointer at
     * the end of the file. If the file does not exist, attempt to
     * create it. In this mode, fseek only affects
     * the reading position, writes are always appended.
     *
     *
     *
     * 'x'
     *
     * Create and open for writing only; place the file pointer at the
     * beginning of the file.  If the file already exists, the
     * fopen call will fail by returning  and
     * generating an error of level E_WARNING.  If
     * the file does not exist, attempt to create it.  This is equivalent
     * to specifying O_EXCL|O_CREAT flags for the
     * underlying open(2) system call.
     *
     *
     *
     * 'x+'
     *
     * Create and open for reading and writing; otherwise it has the
     * same behavior as 'x'.
     *
     *
     *
     * 'c'
     *
     * Open the file for writing only. If the file does not exist, it is
     * created. If it exists, it is neither truncated (as opposed to
     * 'w'), nor the call to this function fails (as is
     * the case with 'x'). The file pointer is
     * positioned on the beginning of the file. This may be useful if it's
     * desired to get an advisory lock (see flock)
     * before attempting to modify the file, as using
     * 'w' could truncate the file before the lock
     * was obtained (if truncation is desired,
     * ftruncate can be used after the lock is
     * requested).
     *
     *
     *
     * 'c+'
     *
     * Open the file for reading and writing; otherwise it has the same
     * behavior as 'c'.
     * @param bool     $useIncludePath The optional third use_include_path parameter
     *                                 can be set to '1' or  if you want to search for the file in the
     *                                 include_path, too.
     * @param resource $context
     *
     * @return resource
     */
    public function fopen(string $filename, string $mode, bool $useIncludePath = null, $context = null)
    {
        return call_user_func_array('fopen', func_get_args());
    }

    /**
     * Output all remaining data on a file pointer
     *
     * @param resource $handle
     *
     * @return int
     */
    public function fpassthru($handle) : int
    {
        return fpassthru($handle);
    }

    /**
     * Format line as CSV and write to file pointer
     *
     * @param resource $handle
     * @param array    $fields     An array of values.
     * @param string   $delimiter  The optional delimiter parameter sets the field
     *                             delimiter (one character only).
     * @param string   $enclosure  The optional enclosure parameter sets the field
     *                             enclosure (one character only).
     * @param string   $escapeChar The optional escape_char parameter sets the
     *                             escape character (one character only).
     *
     * @return int
     */
    public function fputcsv(
        $handle,
        array $fields,
        string $delimiter = null,
        string $enclosure = null,
        string $escapeChar = null
    ) : int {
        return call_user_func_array('fputcsv', func_get_args());
    }

    /**
     * Binary-safe file read
     *
     * @param resource $handle
     * @param int      $length Up to length number of bytes read.
     *
     * @return string
     */
    public function fread($handle, int $length) : string
    {
        return fread($handle, $length);
    }

    /**
     * Parses input from a file according to a format
     *
     * @param resource $handle
     * @param string   $format The specified format as described in the
     *                         sprintf documentation.
     *
     * @return mixed
     */
    public function fscanf($handle, string $format)
    {
        return call_user_func_array('fscanf', func_get_args());
    }

    /**
     * Seeks on a file pointer
     *
     * @param resource $handle
     * @param int      $offset The offset.
     * @param int      $whence whence values are:
     *
     * SEEK_SET - Set position equal to offset bytes.
     * SEEK_CUR - Set position to current location plus offset.
     * SEEK_END - Set position to end-of-file plus offset.
     *
     * @return int
     */
    public function fseek($handle, int $offset, int $whence = null) : int
    {
        return call_user_func_array('fseek', func_get_args());
    }

    /**
     * Gets information about a file using an open file pointer
     *
     * @param resource $handle
     *
     * @return array
     */
    public function fstat($handle) : array
    {
        return fstat($handle);
    }

    /**
     * Returns the current position of the file read/write pointer
     *
     * @param resource $handle The file pointer must be valid, and must point to a file successfully
     *                         opened by fopen or popen.
     *                         ftell gives undefined results for append-only streams
     *                         (opened with "a" flag).
     *
     * @return int
     */
    public function ftell($handle) : int
    {
        return ftell($handle);
    }

    /**
     * Truncates a file to a given length
     *
     * @param resource $handle The file pointer.
     * @param int      $size   The size to truncate to.
     *
     * @return bool
     */
    public function ftruncate($handle, int $size) : bool
    {
        return ftruncate($handle, $size);
    }

    /**
     * Binary-safe file write
     *
     * @param resource $handle
     * @param string   $string The string that is to be written.
     * @param int      $length If the length argument is given, writing will
     *                         stop after length bytes have been written or
     *                         the end of string is reached, whichever comes
     *                         first.
     *
     * @return int
     */
    public function fwrite($handle, string $string, int $length = null) : int
    {
        return call_user_func_array('fwrite', func_get_args());
    }

    /**
     * Find pathnames matching a pattern
     *
     * @param string $pattern The pattern. No tilde expansion or parameter substitution is done.
     * @param int    $flags   Valid flags:
     *
     *
     *
     * GLOB_MARK - Adds a slash to each directory returned
     *
     *
     *
     *
     * GLOB_NOSORT - Return files as they appear in the
     * directory (no sorting). When this flag is not used, the pathnames are
     * sorted alphabetically
     *
     *
     *
     *
     * GLOB_NOCHECK - Return the search pattern if no
     * files matching it were found
     *
     *
     *
     *
     * GLOB_NOESCAPE - Backslashes do not quote
     * metacharacters
     *
     *
     *
     *
     * GLOB_BRACE - Expands {a,b,c} to match 'a', 'b',
     * or 'c'
     *
     *
     *
     *
     * GLOB_ONLYDIR - Return only directory entries
     * which match the pattern
     *
     *
     *
     *
     * GLOB_ERR - Stop on read errors (like unreadable
     * directories), by default errors are ignored.
     *
     * @return array
     */
    public function glob(string $pattern, int $flags = null) : array
    {
        return call_user_func_array('glob', func_get_args());
    }

    /**
     * Tells whether the filename is a directory
     *
     * @param string $filename Path to the file. If filename is a relative
     *                         filename, it will be checked relative to the current working
     *                         directory. If filename is a symbolic or hard link
     *                         then the link will be resolved and checked. If you have enabled ,
     *                         or open_basedir further
     *                         restrictions may apply.
     *
     * @return bool
     */
    public function isDir(string $filename) : bool
    {
        return is_dir($filename);
    }

    /**
     * Tells whether the filename is executable
     *
     * @param string $filename Path to the file.
     *
     * @return bool
     */
    public function isExecutable(string $filename) : bool
    {
        return is_executable($filename);
    }

    /**
     * Tells whether the filename is a regular file
     *
     * @param string $filename Path to the file.
     *
     * @return bool
     */
    public function isFile(string $filename) : bool
    {
        return is_file($filename);
    }

    /**
     * Tells whether the filename is a symbolic link
     *
     * @param string $filename Path to the file.
     *
     * @return bool
     */
    public function isLink(string $filename) : bool
    {
        return is_link($filename);
    }

    /**
     * Tells whether a file exists and is readable
     *
     * @param string $filename Path to the file.
     *
     * @return bool
     */
    public function isReadable(string $filename) : bool
    {
        return is_readable($filename);
    }

    /**
     * Tells whether the file was uploaded via HTTP POST
     *
     * @param string $filename The filename being checked.
     *
     * @return bool
     */
    public function isUploadedFile(string $filename) : bool
    {
        return is_uploaded_file($filename);
    }

    /**
     * Tells whether the filename is writable
     *
     * @param string $filename The filename being checked.
     *
     * @return bool
     */
    public function isWritable(string $filename) : bool
    {
        return is_writable($filename);
    }

    /**
     * Changes group ownership of symlink
     *
     * @param string $filename Path to the symlink.
     * @param mixed  $group    The group specified by name or number.
     *
     * @return bool
     */
    public function lchgrp(string $filename, $group) : bool
    {
        return lchgrp($filename, $group);
    }

    /**
     * Changes user ownership of symlink
     *
     * @param string $filename Path to the file.
     * @param mixed  $user     User name or number.
     *
     * @return bool
     */
    public function lchown(string $filename, $user) : bool
    {
        return lchown($filename, $user);
    }

    /**
     * Create a hard link
     *
     * @param string $target Target of the link.
     * @param string $link   The link name.
     *
     * @return bool
     */
    public function link(string $target, string $link) : bool
    {
        return link($target, $link);
    }

    /**
     * Gets information about a link
     *
     * @param string $path Path to the link.
     *
     * @return int
     */
    public function linkinfo(string $path) : int
    {
        return linkinfo($path);
    }

    /**
     * Gives information about a file or symbolic link
     *
     * @param string $filename Path to a file or a symbolic link.
     *
     * @return array
     */
    public function lstat(string $filename) : array
    {
        return lstat($filename);
    }

    /**
     * Makes directory
     *
     * @param string   $pathname  The directory path.
     * @param int      $mode      The mode is 0777 by default, which means the widest possible
     *                            access. For more information on modes, read the details
     *                            on the chmod page.
     * @param bool     $recursive Allows the creation of nested directories specified in the
     *                            pathname.
     * @param resource $context
     *
     * @return bool
     */
    public function mkdir(string $pathname, int $mode = null, bool $recursive = null, $context = null) : bool
    {
        return call_user_func_array('mkdir', func_get_args());
    }

    /**
     * Moves an uploaded file to a new location
     *
     * @param string $filename    The filename of the uploaded file.
     * @param string $destination The destination of the moved file.
     *
     * @return bool
     */
    public function moveUploadedFile(string $filename, string $destination) : bool
    {
        return move_uploaded_file($filename, $destination);
    }

    /**
     * Parse a configuration file
     *
     * @param string $filename        The filename of the ini file being parsed.
     * @param bool   $processSections By setting the process_sections
     *                                parameter to , you get a multidimensional array, with
     *                                the section names and settings included. The default
     *                                for process_sections is
     * @param int    $scannerMode     Can either be INI_SCANNER_NORMAL (default) or
     *                                INI_SCANNER_RAW. If INI_SCANNER_RAW
     *                                is supplied, then option values will not be parsed.
     *
     * @return array
     */
    public function parseIniFile(string $filename, bool $processSections = null, int $scannerMode = null) : array
    {
        return call_user_func_array('parse_ini_file', func_get_args());
    }

    /**
     * Parse a configuration string
     *
     * @param string $ini             The contents of the ini file being parsed.
     * @param bool   $processSections By setting the process_sections
     *                                parameter to , you get a multidimensional array, with
     *                                the section names and settings included. The default
     *                                for process_sections is
     * @param int    $scannerMode     Can either be INI_SCANNER_NORMAL (default) or
     *                                INI_SCANNER_RAW. If INI_SCANNER_RAW
     *                                is supplied, then option values will not be parsed.
     *
     * @return array
     */
    public function parseIniString(string $ini, bool $processSections = null, int $scannerMode = null) : array
    {
        return call_user_func_array('parse_ini_string', func_get_args());
    }

    /**
     * Returns information about a file path
     *
     * @param string $path    The path to be parsed.
     * @param int    $options If present, specifies a specific element to be returned; one of
     *                        PATHINFO_DIRNAME,
     *                        PATHINFO_BASENAME,
     *                        PATHINFO_EXTENSION or
     *                        PATHINFO_FILENAME.
     *
     * @return mixed
     */
    public function pathinfo(string $path, int $options = null)
    {
        return call_user_func_array('pathinfo', func_get_args());
    }

    /**
     * Closes process file pointer
     *
     * @param resource $handle The file pointer must be valid, and must have been returned by a
     *                         successful call to popen.
     *
     * @return int
     */
    public function pclose($handle) : int
    {
        return pclose($handle);
    }

    /**
     * Opens process file pointer
     *
     * @param string $command The command
     * @param string $mode    The mode
     *
     * @return resource
     */
    public function popen(string $command, string $mode)
    {
        return popen($command, $mode);
    }

    /**
     * Outputs a file
     *
     * @param string   $filename       The filename being read.
     * @param bool     $useIncludePath You can use the optional second parameter and set it to , if
     *                                 you want to search for the file in the include_path, too.
     * @param resource $context        A context stream resource.
     *
     * @return int
     */
    public function readfile(string $filename, bool $useIncludePath = null, $context = null) : int
    {
        return call_user_func_array('readfile', func_get_args());
    }

    /**
     * Returns the target of a symbolic link
     *
     * @param string $path The symbolic link path.
     *
     * @return string
     */
    public function readlink(string $path) : string
    {
        return readlink($path);
    }

    /**
     * Get realpath cache entries
     *
     * @return array
     */
    public function realpathCacheGet() : array
    {
        return realpath_cache_get();
    }

    /**
     * Get realpath cache size
     *
     * @return int
     */
    public function realpathCacheSize() : int
    {
        return realpath_cache_size();
    }

    /**
     * Returns canonicalized absolute pathname
     *
     * @param string $path The path being checked.
     *
     *
     * Whilst a path must be supplied, the value can be blank or
     * In these cases, the value is interpreted as the current directory.
     *
     * @return string
     */
    public function realpath(string $path) : string
    {
        return realpath($path);
    }

    /**
     * Renames a file or directory
     *
     * @param string   $oldname
     * @param string   $newname The new name.
     * @param resource $context
     *
     * @return bool
     */
    public function rename(string $oldname, string $newname, $context = null) : bool
    {
        return call_user_func_array('rename', func_get_args());
    }

    /**
     * Rewind the position of a file pointer
     *
     * @param resource $handle The file pointer must be valid, and must point to a file
     *                         successfully opened by fopen.
     *
     * @return bool
     */
    public function rewind($handle) : bool
    {
        return rewind($handle);
    }

    /**
     * Removes directory
     *
     * @param string   $dirname Path to the directory.
     * @param resource $context
     *
     * @return bool
     */
    public function rmdir(string $dirname, $context = null) : bool
    {
        return call_user_func_array('rmdir', func_get_args());
    }

    /**
     * Gives information about a file
     *
     * @param string $filename Path to the file.
     *
     * @return array
     */
    public function stat(string $filename) : array
    {
        return stat($filename);
    }

    /**
     * Creates a symbolic link
     *
     * @param string $target Target of the link.
     * @param string $link   The link name.
     *
     * @return bool
     */
    public function symlink(string $target, string $link) : bool
    {
        return symlink($target, $link);
    }

    /**
     * Create file with unique file name
     *
     * @param string $dir    The directory where the temporary filename will be created.
     * @param string $prefix The prefix of the generated temporary filename.
     *
     * @return string
     */
    public function tempnam(string $dir, string $prefix) : string
    {
        return tempnam($dir, $prefix);
    }

    /**
     * Creates a temporary file
     *
     * @return resource
     */
    public function tmpfile()
    {
        return tmpfile();
    }

    /**
     * Sets access and modification time of file
     *
     * @param string $filename The name of the file being touched.
     * @param int    $time     The touch time. If time is not supplied,
     *                         the current system time is used.
     * @param int    $atime    If present, the access time of the given filename is set to
     *                         the value of atime. Otherwise, it is set to
     *                         the value passed to the time parameter.
     *                         If neither are present, the current system time is used.
     *
     * @return bool
     */
    public function touch(string $filename, int $time = null, int $atime = null) : bool
    {
        return call_user_func_array('touch', func_get_args());
    }

    /**
     * Changes the current umask
     *
     * @param int $mask The new umask.
     *
     * @return int
     */
    public function umask(int $mask = null) : int
    {
        return call_user_func_array('umask', func_get_args());
    }

    /**
     * Deletes a file
     *
     * @param string   $filename Path to the file.
     * @param resource $context
     *
     * @return bool
     */
    public function unlink(string $filename, $context = null) : bool
    {
        return call_user_func_array('unlink', func_get_args());
    }

}

