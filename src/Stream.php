<?php

namespace PHP\Wrappers;

/**
 * Class Stream
 *
 * @package PHP\Wrappers
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Stream
{
    /**
     * Append bucket to brigade
     *
     * @param resource $brigade
     * @param object   $bucket
     *
     * @return void
     */
    public function bucketAppend($brigade, $bucket)
    {
        stream_bucket_append($brigade, $bucket);
    }

    /**
     * Return a bucket object from the brigade for operating on
     *
     * @param resource $brigade
     *
     * @return object
     */
    public function bucketMakeWriteable($brigade)
    {
        return stream_bucket_make_writeable($brigade);
    }

    /**
     * Create a new bucket for use on the current stream
     *
     * @param resource $stream
     * @param string   $buffer
     *
     * @return object
     */
    public function bucketNew($stream, string $buffer)
    {
        return stream_bucket_new($stream, $buffer);
    }

    /**
     * Prepend bucket to brigade
     *
     * @param resource $brigade
     * @param object   $bucket
     *
     * @return void
     */
    public function bucketPrepend($brigade, $bucket)
    {
        stream_bucket_prepend($brigade, $bucket);
    }

    /**
     * Creates a stream context
     *
     * @param array $options Must be an associative array of associative arrays in the format
     *                       $arr['wrapper']['option'] = $value.
     * @param array $params  Must be an associative array in the format
     *                       $arr['parameter'] = $value.
     *                       Refer to context parameters for
     *                       a listing of standard stream parameters.
     *
     * @return resource
     */
    public function contextCreate(array $options = null, array $params = null)
    {
        return call_user_func_array('stream_context_create', func_get_args());
    }

    /**
     * Retrieve the default stream context
     *
     * @param array $options
     *
     * @return resource
     */
    public function contextGetDefault(array $options = null)
    {
        return call_user_func_array('stream_context_get_default', func_get_args());
    }

    /**
     * Retrieve options for a stream/wrapper/context
     *
     * @param resource $streamOrContext The stream or context to get options from
     *
     * @return array
     */
    public function contextGetOptions($streamOrContext) : array
    {
        return stream_context_get_options($streamOrContext);
    }

    /**
     * Retrieves parameters from a context
     *
     * @param resource $streamOrContext A stream resource or a
     *                                  context resource
     *
     * @return array
     */
    public function contextGetParams($streamOrContext) : array
    {
        return stream_context_get_params($streamOrContext);
    }

    /**
     * Set the default stream context
     *
     * @param array $options The options to set for the default context.
     *
     * @return resource
     */
    public function contextSetDefault(array $options)
    {
        return stream_context_set_default($options);
    }

    /**
     * Sets an option for a stream/wrapper/context
     *
     * @param resource $streamOrContext The stream or context resource to apply the options to.
     * @param string   $wrapper         The options to set for the default context.
     * @param string   $option
     * @param mixed    $value
     *
     * @return bool
     */
    public function contextSetOption($streamOrContext, string $wrapper, string $option, $value) : bool
    {
        return stream_context_set_option($streamOrContext, $wrapper, $option, $value);
    }

    /**
     * Sets an option for a stream/wrapper/context
     *
     * @param resource $streamOrContext The stream or context resource to apply the options to.
     * @param array    $options         The options to set for the default context.
     *
     * @return bool
     */
    public function contextSetOptions($streamOrContext, array $options) : bool
    {
        return stream_context_set_option($streamOrContext, $options);
    }

    /**
     * Set parameters for a stream/wrapper/context
     *
     * @param resource $streamOrContext The stream or context to apply the parameters too.
     * @param array    $params          An array of parameters to set.
     *
     * @return bool
     */
    public function contextSetParams($streamOrContext, array $params) : bool
    {
        return stream_context_set_params($streamOrContext, $params);
    }

    /**
     * Copies data from one stream to another
     *
     * @param resource $source    The source stream
     * @param resource $dest      The destination stream
     * @param int      $maxlength Maximum bytes to copy
     * @param int      $offset    The offset where to start to copy data
     *
     * @return int
     */
    public function copyToStream($source, $dest, int $maxlength = null, int $offset = null) : int
    {
        return call_user_func_array('stream_copy_to_stream', func_get_args());
    }

    /**
     * Set character set for stream encoding
     *
     * @param resource $stream
     * @param string   $encoding
     *
     * @return bool
     */
    public function encoding($stream, string $encoding = null) : bool
    {
        return call_user_func_array('stream_encoding', func_get_args());
    }

    /**
     * Attach a filter to a stream
     *
     * @param resource $stream     The target stream.
     * @param string   $filtername The filter name.
     * @param int      $readWrite  By default, stream_filter_append will
     *                             attach the filter to the read filter chain
     *                             if the file was opened for reading (i.e. File Mode:
     *                             r, and/or +).  The filter
     *                             will also be attached to the write filter chain
     *                             if the file was opened for writing (i.e. File Mode:
     *                             w, a, and/or +).
     *                             STREAM_FILTER_READ,
     *                             STREAM_FILTER_WRITE, and/or
     *                             STREAM_FILTER_ALL can also be passed to the
     *                             read_write parameter to override this behavior.
     * @param mixed    $params     This filter will be added with the specified
     *                             params to the end of
     *                             the list and will therefore be called last during stream operations.
     *                             To add a filter to the beginning of the list, use
     *                             stream_filter_prepend.
     *
     * @return resource
     */
    public function filterAppend($stream, string $filtername, int $readWrite = null, $params = null)
    {
        return call_user_func_array('stream_filter_append', func_get_args());
    }

    /**
     * Attach a filter to a stream
     *
     * @param resource $stream     The target stream.
     * @param string   $filtername The filter name.
     * @param int      $readWrite  By default, stream_filter_prepend will
     *                             attach the filter to the read filter chain
     *                             if the file was opened for reading (i.e. File Mode:
     *                             r, and/or +).  The filter
     *                             will also be attached to the write filter chain
     *                             if the file was opened for writing (i.e. File Mode:
     *                             w, a, and/or +).
     *                             STREAM_FILTER_READ,
     *                             STREAM_FILTER_WRITE, and/or
     *                             STREAM_FILTER_ALL can also be passed to the
     *                             read_write parameter to override this behavior.
     *                             See stream_filter_append for an example of
     *                             using this parameter.
     * @param mixed    $params     This filter will be added with the specified params
     *                             to the beginning of the list and will therefore be
     *                             called first during stream operations.  To add a filter to the end of the
     *                             list, use stream_filter_append.
     *
     * @return resource
     */
    public function filterPrepend($stream, string $filtername, int $readWrite = null, $params = null)
    {
        return call_user_func_array('stream_filter_prepend', func_get_args());
    }

    /**
     * Register a user defined stream filter
     *
     * @param string $filtername The filter name to be registered.
     * @param string $classname  To implement a filter, you need to define a class as an extension of
     *                           php_user_filter with a number of member
     *                           functions. When performing read/write operations on the stream
     *                           to which your filter is attached, PHP will pass the data through your
     *                           filter (and any other filters attached to that stream) so that the
     *                           data may be modified as desired. You must implement the methods
     *                           exactly as described in php_user_filter - doing
     *                           otherwise will lead to undefined behaviour.
     *
     * @return bool
     */
    public function filterRegister(string $filtername, string $classname) : bool
    {
        return stream_filter_register($filtername, $classname);
    }

    /**
     * Remove a filter from a stream
     *
     * @param resource $streamFilter The stream filter to be removed.
     *
     * @return bool
     */
    public function filterRemove($streamFilter) : bool
    {
        return stream_filter_remove($streamFilter);
    }

    /**
     * Reads remainder of a stream into a string
     *
     * @param resource $handle    A stream resource (e.g. returned from fopen)
     * @param int      $maxlength The maximum bytes to read. Defaults to -1 (read all the remaining
     *                            buffer).
     * @param int      $offset    Seek to the specified offset before reading. If this number is negative,
     *                            no seeking will occur and reading will start from the current position.
     *
     * @return string
     */
    public function getContents($handle, int $maxlength = null, int $offset = null) : string
    {
        return call_user_func_array('stream_get_contents', func_get_args());
    }

    /**
     * Retrieve list of registered filters
     *
     * @return array
     */
    public function getFilters() : array
    {
        return stream_get_filters();
    }

    /**
     * Gets line from stream resource up to a given delimiter
     *
     * @param resource $handle A valid file handle.
     * @param int      $length The number of bytes to read from the handle.
     * @param string   $ending An optional string delimiter.
     *
     * @return string
     */
    public function getLine($handle, int $length, string $ending = null) : string
    {
        return call_user_func_array('stream_get_line', func_get_args());
    }

    /**
     * Retrieves header/meta data from streams/file pointers
     *
     * @param resource $stream The stream can be any stream created by fopen,
     *                         fsockopen and pfsockopen.
     *
     * @return array
     */
    public function getMetaData($stream) : array
    {
        return stream_get_meta_data($stream);
    }

    /**
     * Retrieve list of registered socket transports
     *
     * @return array
     */
    public function getTransports() : array
    {
        return stream_get_transports();
    }

    /**
     * Retrieve list of registered streams
     *
     * @return array
     */
    public function getWrappers() : array
    {
        return stream_get_wrappers();
    }

    /**
     * Checks if a stream is a local stream
     *
     * @param mixed $streamOrUrl The stream resource or URL to check.
     *
     * @return bool
     */
    public function isLocal($streamOrUrl) : bool
    {
        return stream_is_local($streamOrUrl);
    }

    /**
     * A callback function for the notification context parameter
     *
     * @param int    $notificationCode One of the STREAM_NOTIFY_* notification constants.
     * @param int    $severity         One of the STREAM_NOTIFY_SEVERITY_* notification constants.
     * @param string $message          Passed if a descriptive message is available for the event.
     * @param int    $messageCode      Passed if a descriptive message code is available for the event.
     * @param int    $bytesTransferred If applicable, the bytes_transferred will be
     *                                 populated.
     * @param int    $bytesMax         If applicable, the bytes_max will be
     *                                 populated.
     *
     * @return void
     */
    public function notificationCallback(
        int $notificationCode,
        int $severity,
        string $message,
        int $messageCode,
        int $bytesTransferred,
        int $bytesMax
    ) {
        stream_notification_callback($notificationCode, $severity, $message, $messageCode, $bytesTransferred,
            $bytesMax);
    }

    /**
     * Resolve filename against the include path
     *
     * @param string $filename The filename to resolve.
     *
     * @return string
     */
    public function resolveIncludePath(string $filename) : string
    {
        return stream_resolve_include_path($filename);
    }

    /**
     * Runs the equivalent of the select() system call on the given
     * arrays of streams with a timeout specified by tv_sec and tv_usec
     *
     * @param array $read   The streams listed in the read array will be watched to
     *                      see if characters become available for reading (more precisely, to see if
     *                      a read will not block - in particular, a stream resource is also ready on
     *                      end-of-file, in which case an fread will return
     *                      a zero length string).
     * @param array $write  The streams listed in the write array will be
     *                      watched to see if a write will not block.
     * @param array $except The streams listed in the except array will be
     *                      watched for high priority exceptional ("out-of-band") data arriving.
     * @param int   $tvSec  The tv_sec and tv_usec
     *                      together form the timeout parameter,
     *                      tv_sec specifies the number of seconds while
     *                      tv_usec the number of microseconds.
     *                      The timeout is an upper bound on the amount of time
     *                      that stream_select will wait before it returns.
     *                      If tv_sec and tv_usec are
     *                      both set to 0, stream_select will
     *                      not wait for data - instead it will return immediately, indicating the
     *                      current status of the streams.
     * @param int   $tvUsec See tv_sec description.
     *
     * @return int
     */
    public function select(array &$read, array &$write, array &$except, int $tvSec, int $tvUsec = null) : int
    {
        return call_user_func_array('stream_select', func_get_args());
    }

    /**
     * Set the stream chunk size
     *
     * @param resource $fp
     * @param int      $chunkSize
     *
     * @return int
     */
    public function setChunkSize($fp, int $chunkSize) : int
    {
        return stream_set_chunk_size($fp, $chunkSize);
    }

    /**
     * Set read file buffering on the given stream
     *
     * @param resource $stream
     * @param int      $buffer
     *
     * @return int
     */
    public function setReadBuffer($stream, int $buffer) : int
    {
        return stream_set_read_buffer($stream, $buffer);
    }

    /**
     * Sets write file buffering on the given stream
     *
     * @param resource $stream The file pointer.
     * @param int      $buffer The number of bytes to buffer. If buffer
     *                         is 0 then write operations are unbuffered.  This ensures that all writes
     *                         with fwrite are completed before other processes are
     *                         allowed to write to that output stream.
     *
     * @return int
     */
    public function setWriteBuffer($stream, int $buffer) : int
    {
        return stream_set_write_buffer($stream, $buffer);
    }

    /**
     * Accept a connection on a socket created by stream_socket_server
     *
     * @param resource $serverSocket The server socket to accept a connection from.
     * @param float    $timeout      Override the default socket accept timeout. Time should be given in
     *                               seconds.
     * @param string   $peername     Will be set to the name (address) of the client which connected, if
     *                               included and available from the selected transport.
     *
     * @return resource
     */
    public function socketAccept($serverSocket, float $timeout = null, string &$peername = null)
    {
        return call_user_func_array('stream_socket_accept', func_get_args());
    }

    /**
     * Open Internet or Unix domain socket connection
     *
     * @param string   $remoteSocket Address to the socket to connect to.
     * @param int      $errno        Will be set to the system level error number if connection fails.
     * @param string   $errstr       Will be set to the system level error message if the connection fails.
     * @param float    $timeout      Number of seconds until the connect() system call
     *                               should timeout.
     *
     *
     * This parameter only applies when not making asynchronous
     * connection attempts.
     *
     *
     *
     *
     * To set a timeout for reading/writing data over the socket, use the
     * stream_set_timeout, as the
     * timeout only applies while making connecting
     * the socket.
     * @param int      $flags        Bitmask field which may be set to any combination of connection flags.
     *                               Currently the select of connection flags is limited to
     *                               STREAM_CLIENT_CONNECT (default),
     *                               STREAM_CLIENT_ASYNC_CONNECT and
     *                               STREAM_CLIENT_PERSISTENT.
     * @param resource $context      A valid context resource created with stream_context_create.
     *
     * @return resource
     */
    public function socketClient(
        string $remoteSocket,
        int &$errno = null,
        string &$errstr = null,
        float $timeout = null,
        int $flags = null,
        $context = null
    ) {
        return call_user_func_array('stream_socket_client', func_get_args());
    }

    /**
     * Turns encryption on/off on an already connected socket
     *
     * @param resource $stream        The stream resource.
     * @param bool     $enable        Enable/disable cryptography on the stream.
     * @param int      $cryptoType    Setup encryption on the stream.
     *                                Valid methods are
     *
     * STREAM_CRYPTO_METHOD_SSLv2_CLIENT
     * STREAM_CRYPTO_METHOD_SSLv3_CLIENT
     * STREAM_CRYPTO_METHOD_SSLv23_CLIENT
     * STREAM_CRYPTO_METHOD_TLS_CLIENT
     * STREAM_CRYPTO_METHOD_SSLv2_SERVER
     * STREAM_CRYPTO_METHOD_SSLv3_SERVER
     * STREAM_CRYPTO_METHOD_SSLv23_SERVER
     * STREAM_CRYPTO_METHOD_TLS_SERVER
     * @param resource $sessionStream Seed the stream with settings from session_stream.
     *
     * @return mixed
     */
    public function socketEnableCrypto($stream, bool $enable, int $cryptoType = null, $sessionStream = null)
    {
        return call_user_func_array('stream_socket_enable_crypto', func_get_args());
    }

    /**
     * Retrieve the name of the local or remote sockets
     *
     * @param resource $handle   The socket to get the name of.
     * @param bool     $wantPeer If set to  the remote socket name will be returned, if set
     *                           to  the local socket name will be returned.
     *
     * @return string
     */
    public function socketGetName($handle, bool $wantPeer) : string
    {
        return stream_socket_get_name($handle, $wantPeer);
    }

    /**
     * Creates a pair of connected, indistinguishable socket streams
     *
     * @param int $domain   The protocol family to be used: STREAM_PF_INET,
     *                      STREAM_PF_INET6 or
     *                      STREAM_PF_UNIX
     * @param int $type     The type of communication to be used:
     *                      STREAM_SOCK_DGRAM,
     *                      STREAM_SOCK_RAW,
     *                      STREAM_SOCK_RDM,
     *                      STREAM_SOCK_SEQPACKET or
     *                      STREAM_SOCK_STREAM
     * @param int $protocol The protocol to be used: STREAM_IPPROTO_ICMP,
     *                      STREAM_IPPROTO_IP,
     *                      STREAM_IPPROTO_RAW,
     *                      STREAM_IPPROTO_TCP or
     *                      STREAM_IPPROTO_UDP
     *
     * @return array
     */
    public function socketPair(int $domain, int $type, int $protocol) : array
    {
        return stream_socket_pair($domain, $type, $protocol);
    }

    /**
     * Receives data from a socket, connected or not
     *
     * @param resource $socket  The remote socket.
     * @param int      $length  The number of bytes to receive from the socket.
     * @param int      $flags   The value of flags can be any combination
     *                          of the following:
     *
     * Possible values for flags
     *
     *
     *
     * STREAM_OOB
     *
     * Process OOB (out-of-band) data.
     *
     *
     *
     * STREAM_PEEK
     *
     * Retrieve data from the socket, but do not consume the buffer.
     * Subsequent calls to fread or
     * stream_socket_recvfrom will see
     * the same data.
     * @param string   $address If address is provided it will be populated with
     *                          the address of the remote socket.
     *
     * @return string
     */
    public function socketRecvfrom($socket, int $length, int $flags = null, string &$address = null) : string
    {
        return call_user_func_array('stream_socket_recvfrom', func_get_args());
    }

    /**
     * Sends a message to a socket, whether it is connected or not
     *
     * @param resource $socket  The socket to send data to.
     * @param string   $data    The data to be sent.
     * @param int      $flags   The value of flags can be any combination
     *                          of the following:
     *
     * possible values for flags
     *
     *
     *
     * STREAM_OOB
     *
     * Process OOB (out-of-band) data.
     * @param string   $address The address specified when the socket stream was created will be used
     *                          unless an alternate address is specified in address.
     *
     * @return int
     */
    public function socketSendto($socket, string $data, int $flags = null, string $address = null) : int
    {
        return call_user_func_array('stream_socket_sendto', func_get_args());
    }

    /**
     * Create an Internet or Unix domain server socket
     *
     * @param string   $localSocket The type of socket created is determined by the transport specified
     *                              using standard URL formatting: transport://target.
     * @param int      $errno       If the optional errno and errstr
     *                              arguments are present they will be set to indicate the actual system
     *                              level error that occurred in the system-level socket(),
     *                              bind(), and listen() calls. If
     *                              the value returned in errno is
     *                              0 and the function returned , it is an
     *                              indication that the error occurred before the bind()
     *                              call. This is most likely due to a problem initializing the socket.
     *                              Note that the errno and
     *                              errstr arguments will always be passed by reference.
     * @param string   $errstr      See errno description.
     * @param int      $flags       A bitmask field which may be set to any combination of socket creation
     *                              flags.
     * @param resource $context
     *
     * @return resource
     */
    public function socketServer(
        string $localSocket,
        int &$errno = null,
        string &$errstr = null,
        int $flags = null,
        $context = null
    ) {
        return call_user_func_array('stream_socket_server', func_get_args());
    }

    /**
     * Shutdown a full-duplex connection
     *
     * @param resource $stream An open stream (opened with stream_socket_client,
     *                         for example)
     * @param int      $how    One of the following constants: STREAM_SHUT_RD
     *                         (disable further receptions), STREAM_SHUT_WR
     *                         (disable further transmissions) or
     *                         STREAM_SHUT_RDWR (disable further receptions and
     *                         transmissions).
     *
     * @return bool
     */
    public function socketShutdown($stream, int $how) : bool
    {
        return stream_socket_shutdown($stream, $how);
    }

    /**
     * Tells whether the stream supports locking.
     *
     * @param resource $stream The stream to check.
     *
     * @return bool
     */
    public function supportsLock($stream) : bool
    {
        return stream_supports_lock($stream);
    }

    /**
     * Register a URL wrapper implemented as a PHP class
     *
     * @param string $protocol  The wrapper name to be registered.
     * @param string $classname The classname which implements the protocol.
     * @param int    $flags     Should be set to STREAM_IS_URL if
     *                          protocol is a URL protocol. Default is 0, local
     *                          stream.
     *
     * @return bool
     */
    public function wrapperRegister(string $protocol, string $classname, int $flags = null) : bool
    {
        return call_user_func_array('stream_wrapper_register', func_get_args());
    }

    /**
     * Restores a previously unregistered built-in wrapper
     *
     * @param string $protocol
     *
     * @return bool
     */
    public function wrapperRestore(string $protocol) : bool
    {
        return stream_wrapper_restore($protocol);
    }

    /**
     * Unregister a URL wrapper
     *
     * @param string $protocol
     *
     * @return bool
     */
    public function wrapperUnregister(string $protocol) : bool
    {
        return stream_wrapper_unregister($protocol);
    }

}

