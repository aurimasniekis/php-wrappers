<?php

namespace PHP\Wrappers;

/**
 * Class Sockets
 *
 * @package PHP\Wrappers
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Sockets
{
    /**
     * Accepts a connection on a socket
     *
     * @param resource $socket A valid socket resource created with socket_create.
     *
     * @return resource
     */
    public function socketAccept($socket)
    {
        return socket_accept($socket);
    }

    /**
     * Binds a name to a socket
     *
     * @param resource $socket  A valid socket resource created with socket_create.
     * @param string   $address If the socket is of the AF_INET family, the
     *                          address is an IP in dotted-quad notation
     *                          (e.g. 127.0.0.1).
     * @param int      $port    The port parameter is only used when
     *                          binding an AF_INET socket, and designates
     *                          the port on which to listen for connections.
     *
     * @return bool
     */
    public function socketBind($socket, string $address, int $port = null) : bool
    {
        return call_user_func_array('socket_bind', func_get_args());
    }

    /**
     * Clears the error on the socket or the last error code
     *
     * @param resource $socket A valid socket resource created with socket_create.
     *
     * @return void
     */
    public function socketClearError($socket = null)
    {
        call_user_func_array('socket_clear_error', func_get_args());
    }

    /**
     * Closes a socket resource
     *
     * @param resource $socket A valid socket resource created with socket_create
     *                         or socket_accept.
     *
     * @return void
     */
    public function socketClose($socket)
    {
        socket_close($socket);
    }

    /**
     * Calculate message buffer size
     *
     * @param int $level
     * @param int $type
     *
     * @return int
     */
    public function socketCmsgSpace(int $level, int $type) : int
    {
        return socket_cmsg_space($level, $type);
    }

    /**
     * Initiates a connection on a socket
     *
     * @param resource $socket
     * @param string   $address The address parameter is either an IPv4 address
     *                          in dotted-quad notation (e.g. 127.0.0.1) if
     *                          socket is AF_INET, a valid
     *                          IPv6 address (e.g. ::1) if IPv6 support is enabled and
     *                          socket is AF_INET6
     *                          or the pathname of a Unix domain socket, if the socket family is
     *                          AF_UNIX.
     * @param int      $port    The port parameter is only used and is mandatory
     *                          when connecting to an AF_INET or an
     *                          AF_INET6 socket, and designates
     *                          the port on the remote host to which a connection should be made.
     *
     * @return bool
     */
    public function socketConnect($socket, string $address, int $port = null) : bool
    {
        return call_user_func_array('socket_connect', func_get_args());
    }

    /**
     * Opens a socket on port to accept connections
     *
     * @param int $port    The port on which to listen on all interfaces.
     * @param int $backlog The backlog parameter defines the maximum length
     *                     the queue of pending connections may grow to.
     *                     SOMAXCONN may be passed as
     *                     backlog parameter, see
     *                     socket_listen for more information.
     *
     * @return resource
     */
    public function socketCreateListen(int $port, int $backlog = null)
    {
        return call_user_func_array('socket_create_listen', func_get_args());
    }

    /**
     * Creates a pair of indistinguishable sockets and stores them in an array
     *
     * @param int   $domain   The domain parameter specifies the protocol
     *                        family to be used by the socket. See socket_create
     *                        for the full list.
     * @param int   $type     The type parameter selects the type of communication
     *                        to be used by the socket. See socket_create for the
     *                        full list.
     * @param int   $protocol The protocol parameter sets the specific
     *                        protocol within the specified domain to be used
     *                        when communicating on the returned socket. The proper value can be retrieved by
     *                        name by using getprotobyname. If
     *                        the desired protocol is TCP, or UDP the corresponding constants
     *                        SOL_TCP, and SOL_UDP
     *                        can also be used.
     * @param array $fd       Reference to an array in which the two socket resources will be inserted.
     *
     * @return bool
     */
    public function socketCreatePair(int $domain, int $type, int $protocol, array &$fd) : bool
    {
        return socket_create_pair($domain, $type, $protocol, $fd);
    }

    /**
     * Create a socket (endpoint for communication)
     *
     * @param int $domain   The domain parameter specifies the protocol
     *                      family to be used by the socket.
     * @param int $type     The type parameter selects the type of communication
     *                      to be used by the socket.
     * @param int $protocol The protocol parameter sets the specific
     *                      protocol within the specified domain to be used
     *                      when communicating on the returned socket. The proper value can be
     *                      retrieved by name by using getprotobyname. If
     *                      the desired protocol is TCP, or UDP the corresponding constants
     *                      SOL_TCP, and SOL_UDP
     *                      can also be used.
     *
     * @return resource
     */
    public function socketCreate(int $domain, int $type, int $protocol)
    {
        return socket_create($domain, $type, $protocol);
    }

    /**
     * Gets socket options for the socket
     *
     * @param resource $socket A valid socket resource created with socket_create
     *                         or socket_accept.
     * @param int      $level  The level parameter specifies the protocol
     *                         level at which the option resides. For example, to retrieve options at
     *                         the socket level, a level parameter of
     *                         SOL_SOCKET would be used. Other levels, such as
     *                         TCP, can be used by
     *                         specifying the protocol number of that level. Protocol numbers can be
     *                         found by using the getprotobyname function.
     * @param int      $optname
     *
     * @return mixed
     */
    public function socketGetOption($socket, int $level, int $optname)
    {
        return socket_get_option($socket, $level, $optname);
    }

    /**
     * Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path,
     * dependent on its type
     *
     * @param resource $socket  A valid socket resource created with socket_create
     *                          or socket_accept.
     * @param string   $address If the given socket is of type AF_INET or
     *                          AF_INET6, socket_getpeername
     *                          will return the peers (remote) IP address in
     *                          appropriate notation (e.g. 127.0.0.1 or
     *                          fe80::1) in the address
     *                          parameter and, if the optional port parameter is
     *                          present, also the associated port.
     * @param int      $port    If given, this will hold the port associated to
     *                          address.
     *
     * @return bool
     */
    public function socketGetpeername($socket, string &$address, int &$port = null) : bool
    {
        return call_user_func_array('socket_getpeername', func_get_args());
    }

    /**
     * Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path,
     * dependent on its type
     *
     * @param resource $socket A valid socket resource created with socket_create
     *                         or socket_accept.
     * @param string   $addr   If the given socket is of type AF_INET
     *                         or AF_INET6, socket_getsockname
     *                         will return the local IP address in appropriate notation (e.g.
     *                         127.0.0.1 or fe80::1) in the
     *                         address parameter and, if the optional
     *                         port parameter is present, also the associated port.
     * @param int      $port   If provided, this will hold the associated port.
     *
     * @return bool
     */
    public function socketGetsockname($socket, string &$addr, int &$port = null) : bool
    {
        return call_user_func_array('socket_getsockname', func_get_args());
    }

    /**
     * Import a stream
     *
     * @param resource $stream The stream resource to import.
     *
     * @return resource
     */
    public function socketImportStream($stream)
    {
        return socket_import_stream($stream);
    }

    /**
     * Returns the last error on the socket
     *
     * @param resource $socket A valid socket resource created with socket_create.
     *
     * @return int
     */
    public function socketLastError($socket = null) : int
    {
        return call_user_func_array('socket_last_error', func_get_args());
    }

    /**
     * Listens for a connection on a socket
     *
     * @param resource $socket  A valid socket resource created with socket_create.
     * @param int      $backlog A maximum of backlog incoming connections will be
     *                          queued for processing. If a connection request arrives with the queue
     *                          full the client may receive an error with an indication of
     *                          ECONNREFUSED, or, if the underlying protocol supports
     *                          retransmission, the request may be ignored so that retries may succeed.
     *
     * @return bool
     */
    public function socketListen($socket, int $backlog = null) : bool
    {
        return call_user_func_array('socket_listen', func_get_args());
    }

    /**
     * Reads a maximum of length bytes from a socket
     *
     * @param resource $socket A valid socket resource created with socket_create
     *                         or socket_accept.
     * @param int      $length The maximum number of bytes read is specified by the
     *                         length parameter. Otherwise you can use
     *                         r, n,
     *                         or 0 to end reading (depending on the type
     *                         parameter, see below).
     * @param int      $type   Optional type parameter is a named constant:
     *
     *
     *
     * PHP_BINARY_READ (Default) - use the system
     * recv() function. Safe for reading binary data.
     *
     *
     *
     *
     * PHP_NORMAL_READ - reading stops at
     * \n or \r.
     *
     * @return string
     */
    public function socketRead($socket, int $length, int $type = null) : string
    {
        return call_user_func_array('socket_read', func_get_args());
    }

    /**
     * Receives data from a connected socket
     *
     * @param resource $socket The socket must be a socket resource previously
     *                         created by socket_create().
     * @param string   $buf    The data received will be fetched to the variable specified with
     *                         buf. If an error occurs, if the
     *                         connection is reset, or if no data is
     *                         available, buf will be set to .
     * @param int      $len    Up to len bytes will be fetched from remote host.
     * @param int      $flags  The value of flags can be any combination of
     *                         the following flags, joined with the binary OR (|)
     *                         operator.
     *
     * @return int
     */
    public function socketRecv($socket, string &$buf, int $len, int $flags) : int
    {
        return socket_recv($socket, $buf, $len, $flags);
    }

    /**
     * Receives data from a socket whether or not it is connection-oriented
     *
     * @param resource $socket The socket must be a socket resource previously
     *                         created by socket_create().
     * @param string   $buf    The data received will be fetched to the variable specified with
     *                         buf.
     * @param int      $len    Up to len bytes will be fetched from remote host.
     * @param int      $flags  The value of flags can be any combination of
     *                         the following flags, joined with the binary OR (|)
     *                         operator.
     * @param string   $name   If the socket is of the type AF_UNIX type,
     *                         name is the path to the file. Else, for
     *                         unconnected sockets, name is the IP address of,
     *                         the remote host, or  if the socket is connection-oriented.
     * @param int      $port   This argument only applies to AF_INET and
     *                         AF_INET6 sockets, and specifies the remote port
     *                         from which the data is received. If the socket is connection-oriented,
     *                         port will be .
     *
     * @return int
     */
    public function socketRecvfrom($socket, string &$buf, int $len, int $flags, string &$name, int &$port = null) : int
    {
        return call_user_func_array('socket_recvfrom', func_get_args());
    }

    /**
     * Read a message
     *
     * @param resource $socket
     * @param string   $message
     * @param int      $flags
     *
     * @return int
     */
    public function socketRecvmsg($socket, string $message, int $flags = null) : int
    {
        return call_user_func_array('socket_recvmsg', func_get_args());
    }

    /**
     * Runs the select() system call on the given arrays of sockets with a specified timeout
     *
     * @param array $read   The sockets listed in the read array will be
     *                      watched to see if characters become available for reading (more
     *                      precisely, to see if a read will not block - in particular, a socket
     *                      resource is also ready on end-of-file, in which case a
     *                      socket_read will return a zero length string).
     * @param array $write  The sockets listed in the write array will be
     *                      watched to see if a write will not block.
     * @param array $except The sockets listed in the except array will be
     *                      watched for exceptions.
     * @param int   $tvSec  The tv_sec and tv_usec
     *                      together form the timeout parameter. The
     *                      timeout is an upper bound on the amount of time
     *                      elapsed before socket_select return.
     *                      tv_sec may be zero , causing
     *                      socket_select to return immediately. This is useful
     *                      for polling. If tv_sec is  (no timeout),
     *                      socket_select can block indefinitely.
     * @param int   $tvUsec
     *
     * @return int
     */
    public function socketSelect(array &$read, array &$write, array &$except, int $tvSec, int $tvUsec = null) : int
    {
        return call_user_func_array('socket_select', func_get_args());
    }

    /**
     * Sends data to a connected socket
     *
     * @param resource $socket A valid socket resource created with socket_create
     *                         or socket_accept.
     * @param string   $buf    A buffer containing the data that will be sent to the remote host.
     * @param int      $len    The number of bytes that will be sent to the remote host from
     *                         buf.
     * @param int      $flags  The value of flags can be any combination of
     *                         the following flags, joined with the binary OR (|)
     *                         operator.
     *
     * Possible values for flags
     *
     *
     *
     * MSG_OOB
     *
     * Send OOB (out-of-band) data.
     *
     *
     *
     * MSG_EOR
     *
     * Indicate a record mark. The sent data completes the record.
     *
     *
     *
     * MSG_EOF
     *
     * Close the sender side of the socket and include an appropriate
     * notification of this at the end of the sent data. The sent data
     * completes the transaction.
     *
     *
     *
     * MSG_DONTROUTE
     *
     * Bypass routing, use direct interface.
     *
     * @return int
     */
    public function socketSend($socket, string $buf, int $len, int $flags) : int
    {
        return socket_send($socket, $buf, $len, $flags);
    }

    /**
     * Send a message
     *
     * @param resource $socket
     * @param array    $message
     * @param int      $flags
     *
     * @return int
     */
    public function socketSendmsg($socket, array $message, int $flags) : int
    {
        return socket_sendmsg($socket, $message, $flags);
    }

    /**
     * Sends a message to a socket, whether it is connected or not
     *
     * @param resource $socket A valid socket resource created using socket_create.
     * @param string   $buf    The sent data will be taken from buffer buf.
     * @param int      $len    len bytes from buf will be
     *                         sent.
     * @param int      $flags  The value of flags can be any combination of
     *                         the following flags, joined with the binary OR (|)
     *                         operator.
     *
     * Possible values for flags
     *
     *
     *
     * MSG_OOB
     *
     * Send OOB (out-of-band) data.
     *
     *
     *
     * MSG_EOR
     *
     * Indicate a record mark. The sent data completes the record.
     *
     *
     *
     * MSG_EOF
     *
     * Close the sender side of the socket and include an appropriate
     * notification of this at the end of the sent data. The sent data
     * completes the transaction.
     *
     *
     *
     * MSG_DONTROUTE
     *
     * Bypass routing, use direct interface.
     * @param string   $addr   IP address of the remote host.
     * @param int      $port   port is the remote port number at which the data
     *                         will be sent.
     *
     * @return int
     */
    public function socketSendto($socket, string $buf, int $len, int $flags, string $addr, int $port = null) : int
    {
        return call_user_func_array('socket_sendto', func_get_args());
    }

    /**
     * Sets blocking mode on a socket resource
     *
     * @param resource $socket A valid socket resource created with socket_create
     *                         or socket_accept.
     *
     * @return bool
     */
    public function socketSetBlock($socket) : bool
    {
        return socket_set_block($socket);
    }

    /**
     * Sets nonblocking mode for file descriptor fd
     *
     * @param resource $socket A valid socket resource created with socket_create
     *                         or socket_accept.
     *
     * @return bool
     */
    public function socketSetNonblock($socket) : bool
    {
        return socket_set_nonblock($socket);
    }

    /**
     * Sets socket options for the socket
     *
     * @param resource $socket  A valid socket resource created with socket_create
     *                          or socket_accept.
     * @param int      $level   The level parameter specifies the protocol
     *                          level at which the option resides. For example, to retrieve options at
     *                          the socket level, a level parameter of
     *                          SOL_SOCKET would be used. Other levels, such as
     *                          TCP, can be used by specifying the protocol number of that level.
     *                          Protocol numbers can be found by using the
     *                          getprotobyname function.
     * @param int      $optname The available socket options are the same as those for the
     *                          socket_get_option function.
     * @param mixed    $optval  The option value.
     *
     * @return bool
     */
    public function socketSetOption($socket, int $level, int $optname, $optval) : bool
    {
        return socket_set_option($socket, $level, $optname, $optval);
    }

    /**
     * Shuts down a socket for receiving, sending, or both
     *
     * @param resource $socket A valid socket resource created with socket_create.
     * @param int      $how    The value of how can be one of the following:
     *
     * possible values for how
     *
     *
     *
     * 0
     *
     * Shutdown socket reading
     *
     *
     *
     * 1
     *
     * Shutdown socket writing
     *
     *
     *
     * 2
     *
     * Shutdown socket reading and writing
     *
     * @return bool
     */
    public function socketShutdown($socket, int $how = null) : bool
    {
        return call_user_func_array('socket_shutdown', func_get_args());
    }

    /**
     * Return a string describing a socket error
     *
     * @param int $errno A valid socket error number, likely produced by
     *                   socket_last_error.
     *
     * @return string
     */
    public function socketStrerror(int $errno) : string
    {
        return socket_strerror($errno);
    }

    /**
     * Write to a socket
     *
     * @param resource $socket
     * @param string   $buffer The buffer to be written.
     * @param int      $length The optional parameter length can specify an
     *                         alternate length of bytes written to the socket. If this length is
     *                         greater than the buffer length, it is silently truncated to the length
     *                         of the buffer.
     *
     * @return int
     */
    public function socketWrite($socket, string $buffer, int $length = null) : int
    {
        return call_user_func_array('socket_write', func_get_args());
    }

}

