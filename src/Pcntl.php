<?php

namespace PHP\Wrappers;

/**
 * Class Pcntl
 *
 * @package PHP\Wrappers
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Pcntl
{
    /**
     * Set an alarm clock for delivery of a signal
     *
     * @param int $seconds The number of seconds to wait. If seconds is
     *                     zero, no new alarm is created.
     *
     * @return int
     */
    public function alarm(int $seconds) : int
    {
        return pcntl_alarm($seconds);
    }

    /**
     * Executes specified program in current process space
     *
     * @param string $path path must be the path to a binary executable or a
     *                     script with a valid path pointing to an executable in the shebang (
     *                     #!/usr/local/bin/perl for example) as the first line.  See your system's
     *                     man execve(2) page for additional information.
     * @param array  $args args is an array of argument strings passed to the
     *                     program.
     * @param array  $envs envs is an array of strings which are passed as
     *                     environment to the program.  The array is in the format of name => value,
     *                     the key being the name of the environmental variable and the value being
     *                     the value of that variable.
     *
     * @return bool
     */
    public function exec(string $path, array $args = null, array $envs = null) : bool
    {
        return call_user_func_array('pcntl_exec', func_get_args());
    }

    /**
     * Forks the currently running process
     *
     * @return int
     */
    public function fork() : int
    {
        return pcntl_fork();
    }

    /**
     * Retrieve the error number set by the last pcntl function which failed
     *
     * @return int
     */
    public function getLastError() : int
    {
        return pcntl_get_last_error();
    }

    /**
     * Get the priority of any process
     *
     * @param int $pid               If not specified, the pid of the current process is used.
     * @param int $processIdentifier One of PRIO_PGRP, PRIO_USER
     *                               or PRIO_PROCESS.
     *
     * @return int
     */
    public function getPriority(int $pid = null, int $processIdentifier = null) : int
    {
        return call_user_func_array('pcntl_getpriority', func_get_args());
    }

    /**
     * Change the priority of any process
     *
     * @param int $priority          priority is generally a value in the range
     *                               -20 to 20. The default priority
     *                               is 0 while a lower numerical value causes more
     *                               favorable scheduling.  Because priority levels can differ between
     *                               system types and kernel versions, please see your system's setpriority(2)
     *                               man page for specific details.
     * @param int $pid               If not specified, the pid of the current process is used.
     * @param int $processIdentifier One of PRIO_PGRP, PRIO_USER
     *                               or PRIO_PROCESS.
     *
     * @return bool
     */
    public function setPriority(int $priority, int $pid = null, int $processIdentifier = null) : bool
    {
        return call_user_func_array('pcntl_setpriority', func_get_args());
    }

    /**
     * Calls signal handlers for pending signals
     *
     * @return bool
     */
    public function signalDispatch() : bool
    {
        return pcntl_signal_dispatch();
    }

    /**
     * Installs a signal handler
     *
     * @param int          $signo           The signal number.
     * @param callable|int $handler         The signal handler. This may be either a callable, which
     *                                      will be invoked to handle the signal, or either of the two global
     *                                      constants SIG_IGN or SIG_DFL,
     *                                      which will ignore the signal or restore the default signal handler
     *                                      respectively.
     * @param bool         $restartSyscalls Specifies whether system call restarting should be used when this
     *                                      signal arrives.
     *
     * @return bool
     */
    public function signal(int $signo, $handler, bool $restartSyscalls = null) : bool
    {
        return call_user_func_array('pcntl_signal', func_get_args());
    }

    /**
     * Sets and retrieves blocked signals
     *
     * @param int   $how    Sets the behavior of pcntl_sigprocmask. Possible
     *                      values:
     *
     * SIG_BLOCK: Add the signals to the
     * currently blocked signals.
     * SIG_UNBLOCK: Remove the signals from the
     * currently blocked signals.
     * SIG_SETMASK: Replace the currently
     * blocked signals by the given list of signals.
     * @param array $set    List of signals.
     * @param array $oldset The oldset parameter is set to an array
     *                      containing the list of the previously blocked signals.
     *
     * @return bool
     */
    public function sigprocmask(int $how, array $set, array &$oldset = null) : bool
    {
        return call_user_func_array('pcntl_sigprocmask', func_get_args());
    }

    /**
     * Waits for signals, with a timeout
     *
     * @param array $set         Array of signals to wait for.
     * @param array $siginfo     The siginfo is set to an array containing
     *                           informations about the signal. See
     *                           pcntl_sigwaitinfo.
     * @param int   $seconds     Timeout in seconds.
     * @param int   $nanoseconds Timeout in nanoseconds.
     *
     * @return int
     */
    public function sigtimedwait(array $set, array &$siginfo = null, int $seconds = null, int $nanoseconds = null) : int
    {
        return call_user_func_array('pcntl_sigtimedwait', func_get_args());
    }

    /**
     * Waits for signals
     *
     * @param array $set     Array of signals to wait for.
     * @param array $siginfo The siginfo parameter is set to an array containing
     *                       informations about the signal.
     *
     * @return int
     */
    public function sigwaitinfo(array $set, array &$siginfo = null) : int
    {
        return call_user_func_array('pcntl_sigwaitinfo', func_get_args());
    }

    /**
     * Retrieve the system error message associated with the given errno
     *
     * @param int $errno
     *
     * @return string
     */
    public function strerror(int $errno) : string
    {
        return pcntl_strerror($errno);
    }

    /**
     * Waits on or returns the status of a forked child
     *
     * @param int $status  pcntl_wait will store status information
     *                     in the status parameter which can be
     *                     evaluated using the following functions:
     *                     pcntl_wifexited,
     *                     pcntl_wifstopped,
     *                     pcntl_wifsignaled,
     *                     pcntl_wexitstatus,
     *                     pcntl_wtermsig and
     *                     pcntl_wstopsig.
     * @param int $options If wait3 is available on your system (mostly BSD-style systems), you can
     *                     provide the optional options parameter.  If this
     *                     parameter is not provided, wait will be used for the system call.  If
     *                     wait3 is not available, providing a value for options
     *                     will have no effect. The value of options
     *                     is the value of zero or more of the following two constants
     *                     OR'ed together:
     *
     * Possible values for options
     *
     *
     *
     * WNOHANG
     *
     * Return immediately if no child has exited.
     *
     *
     *
     * WUNTRACED
     *
     * Return for children which are stopped, and whose status has
     * not been reported.
     *
     * @return int
     */
    public function wait(int &$status, int $options = null) : int
    {
        return call_user_func_array('pcntl_wait', func_get_args());
    }

    /**
     * Waits on or returns the status of a forked child
     *
     * @param int $pid     The value of pid can be one of the following:
     *
     * possible values for pid
     *
     *
     *
     * -1
     *
     * wait for any child process whose process group ID is equal to
     * the absolute value of pid.
     *
     *
     *
     * -1
     *
     * wait for any child process; this is the same behaviour that
     * the wait function exhibits.
     *
     *
     *
     * 0
     *
     * wait for any child process whose process group ID is equal to
     * that of the calling process.
     *
     *
     *
     * 0
     *
     * wait for the child whose process ID is equal to the value of
     * pid.
     * @param int $status  pcntl_waitpid will store status information
     *                     in the status parameter which can be
     *                     evaluated using the following functions:
     *                     pcntl_wifexited,
     *                     pcntl_wifstopped,
     *                     pcntl_wifsignaled,
     *                     pcntl_wexitstatus,
     *                     pcntl_wtermsig and
     *                     pcntl_wstopsig.
     * @param int $options The value of options is the value of zero
     *                     or more of the following two global constants
     *                     OR'ed together:
     *
     * possible values for options
     *
     *
     *
     * WNOHANG
     *
     * return immediately if no child has exited.
     *
     *
     *
     * WUNTRACED
     *
     * return for children which are stopped, and whose status has
     * not been reported.
     *
     * @return int
     */
    public function waitpid(int $pid, int &$status, int $options = null) : int
    {
        return call_user_func_array('pcntl_waitpid', func_get_args());
    }

    /**
     * Returns the return code of a terminated child
     *
     * @param int $status
     *
     * @return int
     */
    public function wexitstatus(int $status) : int
    {
        return pcntl_wexitstatus($status);
    }

    /**
     * Checks if status code represents a normal exit
     *
     * @param int $status
     *
     * @return bool
     */
    public function wifexited(int $status) : bool
    {
        return pcntl_wifexited($status);
    }

    /**
     * Checks whether the status code represents a termination due to a signal
     *
     * @param int $status
     *
     * @return bool
     */
    public function wifsignaled(int $status) : bool
    {
        return pcntl_wifsignaled($status);
    }

    /**
     * Checks whether the child process is currently stopped
     *
     * @param int $status
     *
     * @return bool
     */
    public function wifstopped(int $status) : bool
    {
        return pcntl_wifstopped($status);
    }

    /**
     * Returns the signal which caused the child to stop
     *
     * @param int $status
     *
     * @return int
     */
    public function wstopsig(int $status) : int
    {
        return pcntl_wstopsig($status);
    }

    /**
     * Returns the signal which caused the child to terminate
     *
     * @param int $status
     *
     * @return int
     */
    public function wtermsig(int $status) : int
    {
        return pcntl_wtermsig($status);
    }

}

