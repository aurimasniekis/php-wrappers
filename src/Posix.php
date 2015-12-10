<?php

namespace PHP\Wrappers;

/**
 * Class Posix
 *
 * @package PHP\Wrappers
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Posix
{
    /**
     * Determine accessibility of a file
     *
     * @param string $file The name of the file to be tested.
     * @param int    $mode A mask consisting of one or more of POSIX_F_OK,
     *                     POSIX_R_OK, POSIX_W_OK and
     *                     POSIX_X_OK.
     *
     * @return bool
     */
    public function access(string $file, int $mode = null) : bool
    {
        return call_user_func_array('posix_access', func_get_args());
    }

    /**
     * Get path name of controlling terminal
     *
     * @return string
     */
    public function ctermid() : string
    {
        return posix_ctermid();
    }

    /**
     * Retrieve the error number set by the last posix function that failed
     *
     * @return int
     */
    public function getLastError() : int
    {
        return posix_get_last_error();
    }

    /**
     * Pathname of current directory
     *
     * @return string
     */
    public function getcwd() : string
    {
        return posix_getcwd();
    }

    /**
     * Return the effective group ID of the current process
     *
     * @return int
     */
    public function getegid() : int
    {
        return posix_getegid();
    }

    /**
     * Return the effective user ID of the current process
     *
     * @return int
     */
    public function geteuid() : int
    {
        return posix_geteuid();
    }

    /**
     * Return the real group ID of the current process
     *
     * @return int
     */
    public function getgid() : int
    {
        return posix_getgid();
    }

    /**
     * Return info about a group by group id
     *
     * @param int $gid The group id.
     *
     * @return array
     */
    public function getgrgid(int $gid) : array
    {
        return posix_getgrgid($gid);
    }

    /**
     * Return info about a group by name
     *
     * @param string $name The name of the group
     *
     * @return array
     */
    public function getgrnam(string $name) : array
    {
        return posix_getgrnam($name);
    }

    /**
     * Return the group set of the current process
     *
     * @return array
     */
    public function getgroups() : array
    {
        return posix_getgroups();
    }

    /**
     * Return login name
     *
     * @return string
     */
    public function getlogin() : string
    {
        return posix_getlogin();
    }

    /**
     * Get process group id for job control
     *
     * @param int $pid The process id.
     *
     * @return int
     */
    public function getpgid(int $pid) : int
    {
        return posix_getpgid($pid);
    }

    /**
     * Return the current process group identifier
     *
     * @return int
     */
    public function getpgrp() : int
    {
        return posix_getpgrp();
    }

    /**
     * Return the current process identifier
     *
     * @return int
     */
    public function getpid() : int
    {
        return posix_getpid();
    }

    /**
     * Return the parent process identifier
     *
     * @return int
     */
    public function getppid() : int
    {
        return posix_getppid();
    }

    /**
     * Return info about a user by username
     *
     * @param string $username An alphanumeric username.
     *
     * @return array
     */
    public function getpwnam(string $username) : array
    {
        return posix_getpwnam($username);
    }

    /**
     * Return info about a user by user id
     *
     * @param int $uid The user identifier.
     *
     * @return array
     */
    public function getpwuid(int $uid) : array
    {
        return posix_getpwuid($uid);
    }

    /**
     * Return info about system resource limits
     *
     * @return array
     */
    public function getrlimit() : array
    {
        return posix_getrlimit();
    }

    /**
     * Get the current sid of the process
     *
     * @param int $pid The process identifier. If set to 0, the current process is
     *                 assumed.  If an invalid pid is
     *                 specified, then  is returned and an error is set which
     *                 can be checked with posix_get_last_error.
     *
     * @return int
     */
    public function getsid(int $pid) : int
    {
        return posix_getsid($pid);
    }

    /**
     * Return the real user ID of the current process
     *
     * @return int
     */
    public function getuid() : int
    {
        return posix_getuid();
    }

    /**
     * Calculate the group access list
     *
     * @param string $name        The user to calculate the list for.
     * @param int    $baseGroupId Typically the group number from the password file.
     *
     * @return bool
     */
    public function initgroups(string $name, int $baseGroupId) : bool
    {
        return posix_initgroups($name, $baseGroupId);
    }

    /**
     * Determine if a file descriptor is an interactive terminal
     *
     * @param mixed $fd
     *
     * @return bool
     */
    public function isatty($fd) : bool
    {
        return posix_isatty($fd);
    }

    /**
     * Send a signal to a process
     *
     * @param int $pid The process identifier.
     * @param int $sig One of the PCNTL signals constants.
     *
     * @return bool
     */
    public function kill(int $pid, int $sig) : bool
    {
        return posix_kill($pid, $sig);
    }

    /**
     * Create a fifo special file (a named pipe)
     *
     * @param string $pathname Path to the FIFO file.
     * @param int    $mode     The second parameter mode has to be given in
     *                         octal notation (e.g. 0644). The permission of the newly created
     *                         FIFO also depends on the setting of the current
     *                         umask. The permissions of the created file are
     *                         (mode  ~umask).
     *
     * @return bool
     */
    public function mkfifo(string $pathname, int $mode) : bool
    {
        return posix_mkfifo($pathname, $mode);
    }

    /**
     * Create a special or ordinary file (POSIX.1)
     *
     * @param string $pathname The file to create
     * @param int    $mode     This parameter is constructed by a bitwise OR between file type (one of
     *                         the following constants: POSIX_S_IFREG,
     *                         POSIX_S_IFCHR, POSIX_S_IFBLK,
     *                         POSIX_S_IFIFO or
     *                         POSIX_S_IFSOCK) and permissions.
     * @param int    $major    The major device kernel identifier (required to pass when using
     *                         S_IFCHR or S_IFBLK).
     * @param int    $minor    The minor device kernel identifier.
     *
     * @return bool
     */
    public function mknod(string $pathname, int $mode, int $major = null, int $minor = null) : bool
    {
        return call_user_func_array('posix_mknod', func_get_args());
    }

    /**
     * Set the effective GID of the current process
     *
     * @param int $gid The group id.
     *
     * @return bool
     */
    public function setegid(int $gid) : bool
    {
        return posix_setegid($gid);
    }

    /**
     * Set the effective UID of the current process
     *
     * @param int $uid The user id.
     *
     * @return bool
     */
    public function seteuid(int $uid) : bool
    {
        return posix_seteuid($uid);
    }

    /**
     * Set the GID of the current process
     *
     * @param int $gid The group id.
     *
     * @return bool
     */
    public function setgid(int $gid) : bool
    {
        return posix_setgid($gid);
    }

    /**
     * Set process group id for job control
     *
     * @param int $pid  The process id.
     * @param int $pgid The process group id.
     *
     * @return bool
     */
    public function setpgid(int $pid, int $pgid) : bool
    {
        return posix_setpgid($pid, $pgid);
    }

    /**
     * Set system resource limits
     *
     * @param int $resource  The
     *                       resource limit constant
     *                       corresponding to the limit that is being set.
     * @param int $softlimit The soft limit, in whatever unit the resource limit requires, or
     *                       POSIX_RLIMIT_INFINITY.
     * @param int $hardlimit The hard limit, in whatever unit the resource limit requires, or
     *                       POSIX_RLIMIT_INFINITY.
     *
     * @return bool
     */
    public function setrlimit(int $resource, int $softlimit, int $hardlimit) : bool
    {
        return posix_setrlimit($resource, $softlimit, $hardlimit);
    }

    /**
     * Make the current process a session leader
     *
     * @return int
     */
    public function setsid() : int
    {
        return posix_setsid();
    }

    /**
     * Set the UID of the current process
     *
     * @param int $uid The user id.
     *
     * @return bool
     */
    public function setuid(int $uid) : bool
    {
        return posix_setuid($uid);
    }

    /**
     * Retrieve the system error message associated with the given errno
     *
     * @param int $errno A POSIX error number, returned by
     *                   posix_get_last_error. If set to 0, then the
     *                   string "Success" is returned.
     *
     * @return string
     */
    public function strerror(int $errno) : string
    {
        return posix_strerror($errno);
    }

    /**
     * Get process times
     *
     * @return array
     */
    public function times() : array
    {
        return posix_times();
    }

    /**
     * Determine terminal device name
     *
     * @param mixed $fd
     *
     * @return string
     */
    public function ttyname($fd) : string
    {
        return posix_ttyname($fd);
    }

    /**
     * Get system name
     *
     * @return array
     */
    public function uname() : array
    {
        return posix_uname();
    }

}

