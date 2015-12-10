<?php

namespace PHP\Wrappers;

/**
 * Class Zlib
 *
 * @package PHP\Wrappers
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Zlib
{
    /**
     * Close an open gz-file pointer
     *
     * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
     *                     successfully opened by gzopen.
     *
     * @return bool
     */
    public function gzclose($zp) : bool
    {
        return gzclose($zp);
    }

    /**
     * Compress a string
     *
     * @param string $data     The data to compress.
     * @param int    $level    The level of compression. Can be given as 0 for no compression up to 9
     *                         for maximum compression.
     * @param int    $encoding One of ZLIB_ENCODING_* constants.
     *
     * @return string
     */
    public function gzcompress(string $data, int $level = null, int $encoding = null) : string
    {
        return call_user_func_array('gzcompress', func_get_args());
    }

    /**
     * Decodes a gzip compressed string
     *
     * @param string $data   The data to decode, encoded by gzencode.
     * @param int    $length The maximum length of data to decode.
     *
     * @return string
     */
    public function gzdecode(string $data, int $length = null) : string
    {
        return call_user_func_array('gzdecode', func_get_args());
    }

    /**
     * Deflate a string
     *
     * @param string $data     The data to deflate.
     * @param int    $level    The level of compression. Can be given as 0 for no compression up to 9
     *                         for maximum compression. If not given, the default compression level will
     *                         be the default compression level of the zlib library.
     * @param int    $encoding One of ZLIB_ENCODING_* constants.
     *
     * @return string
     */
    public function gzdeflate(string $data, int $level = null, int $encoding = null) : string
    {
        return call_user_func_array('gzdeflate', func_get_args());
    }

    /**
     * Create a gzip compressed string
     *
     * @param string $data         The data to encode.
     * @param int    $level        The level of compression. Can be given as 0 for no compression up to 9
     *                             for maximum compression. If not given, the default compression level will
     *                             be the default compression level of the zlib library.
     * @param int    $encodingMode The encoding mode. Can be FORCE_GZIP (the default)
     *                             or FORCE_DEFLATE.
     *
     * @return string
     */
    public function gzencode(string $data, int $level = null, int $encodingMode = null) : string
    {
        return call_user_func_array('gzencode', func_get_args());
    }

    /**
     * Test for EOF on a gz-file pointer
     *
     * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
     *                     successfully opened by gzopen.
     *
     * @return int
     */
    public function gzeof($zp) : int
    {
        return gzeof($zp);
    }

    /**
     * Read entire gz-file into an array
     *
     * @param string $filename       The file name.
     * @param int    $useIncludePath You can set this optional parameter to 1, if you
     *                               want to search for the file in the include_path too.
     *
     * @return array
     */
    public function gzfile(string $filename, int $useIncludePath = null) : array
    {
        return call_user_func_array('gzfile', func_get_args());
    }

    /**
     * Get character from gz-file pointer
     *
     * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
     *                     successfully opened by gzopen.
     *
     * @return string
     */
    public function gzgetc($zp) : string
    {
        return gzgetc($zp);
    }

    /**
     * Get line from file pointer
     *
     * @param resource $zp     The gz-file pointer. It must be valid, and must point to a file
     *                         successfully opened by gzopen.
     * @param int      $length The length of data to get.
     *
     * @return string
     */
    public function gzgets($zp, int $length = null) : string
    {
        return call_user_func_array('gzgets', func_get_args());
    }

    /**
     * Get line from gz-file pointer and strip HTML tags
     *
     * @param resource $zp            The gz-file pointer. It must be valid, and must point to a file
     *                                successfully opened by gzopen.
     * @param int      $length        The length of data to get.
     * @param string   $allowableTags You can use this optional parameter to specify tags which should not
     *                                be stripped.
     *
     * @return string
     */
    public function gzgetss($zp, int $length, string $allowableTags = null) : string
    {
        return call_user_func_array('gzgetss', func_get_args());
    }

    /**
     * Inflate a deflated string
     *
     * @param string $data   The data compressed by gzdeflate.
     * @param int    $length The maximum length of data to decode.
     *
     * @return string
     */
    public function gzinflate(string $data, int $length = null) : string
    {
        return call_user_func_array('gzinflate', func_get_args());
    }

    /**
     * Open gz-file
     *
     * @param string $filename       The file name.
     * @param string $mode           As in fopen (rb or
     *                               wb) but can also include a compression level
     *                               (wb9) or a strategy: f for
     *                               filtered data as in wb6f, h for
     *                               Huffman only compression as in wb1h.
     *                               (See the description of deflateInit2
     *                               in zlib.h for
     *                               more information about the strategy parameter.)
     * @param int    $useIncludePath You can set this optional parameter to 1, if you
     *                               want to search for the file in the include_path too.
     *
     * @return resource
     */
    public function gzopen(string $filename, string $mode, int $useIncludePath = null)
    {
        return call_user_func_array('gzopen', func_get_args());
    }

    /**
     * Output all remaining data on a gz-file pointer
     *
     * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
     *                     successfully opened by gzopen.
     *
     * @return int
     */
    public function gzpassthru($zp) : int
    {
        return gzpassthru($zp);
    }

    /**
     * Binary-safe gz-file read
     *
     * @param resource $zp     The gz-file pointer. It must be valid, and must point to a file
     *                         successfully opened by gzopen.
     * @param int      $length The number of bytes to read.
     *
     * @return string
     */
    public function gzread($zp, int $length) : string
    {
        return gzread($zp, $length);
    }

    /**
     * Rewind the position of a gz-file pointer
     *
     * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
     *                     successfully opened by gzopen.
     *
     * @return bool
     */
    public function gzrewind($zp) : bool
    {
        return gzrewind($zp);
    }

    /**
     * Seek on a gz-file pointer
     *
     * @param resource $zp     The gz-file pointer. It must be valid, and must point to a file
     *                         successfully opened by gzopen.
     * @param int      $offset The seeked offset.
     * @param int      $whence whence values are:
     *
     * SEEK_SET - Set position equal to offset bytes.
     * SEEK_CUR - Set position to current location plus offset.
     *
     * @return int
     */
    public function gzseek($zp, int $offset, int $whence = null) : int
    {
        return call_user_func_array('gzseek', func_get_args());
    }

    /**
     * Tell gz-file pointer read/write position
     *
     * @param resource $zp The gz-file pointer. It must be valid, and must point to a file
     *                     successfully opened by gzopen.
     *
     * @return int
     */
    public function gztell($zp) : int
    {
        return gztell($zp);
    }

    /**
     * Uncompress a compressed string
     *
     * @param string $data   The data compressed by gzcompress.
     * @param int    $length The maximum length of data to decode.
     *
     * @return string
     */
    public function gzuncompress(string $data, int $length = null) : string
    {
        return call_user_func_array('gzuncompress', func_get_args());
    }

    /**
     * Binary-safe gz-file write
     *
     * @param resource $zp     The gz-file pointer. It must be valid, and must point to a file
     *                         successfully opened by gzopen.
     * @param string   $string The string to write.
     * @param int      $length The number of uncompressed bytes to write. If supplied, writing will
     *                         stop after length (uncompressed) bytes have been
     *                         written or the end of string is reached,
     *                         whichever comes first.
     *
     * @return int
     */
    public function gzwrite($zp, string $string, int $length = null) : int
    {
        return call_user_func_array('gzwrite', func_get_args());
    }

    /**
     * Output a gz-file
     *
     * @param string $filename       The file name. This file will be opened from the filesystem and its
     *                               contents written to standard output.
     * @param int    $useIncludePath You can set this optional parameter to 1, if you
     *                               want to search for the file in the include_path too.
     *
     * @return int
     */
    public function readgzfile(string $filename, int $useIncludePath = null) : int
    {
        return call_user_func_array('readgzfile', func_get_args());
    }

    /**
     * Uncompress any raw/gzip/zlib encoded data
     *
     * @param string $data
     * @param string $maxDecodedLen
     *
     * @return string
     */
    public function decode(string $data, string $maxDecodedLen = null) : string
    {
        return call_user_func_array('zlib_decode', func_get_args());
    }

    /**
     * Compress data with the specified encoding
     *
     * @param string $data
     * @param string $encoding
     * @param string $level
     *
     * @return string
     */
    public function encode(string $data, string $encoding, string $level = null) : string
    {
        return call_user_func_array('zlib_encode', func_get_args());
    }

    /**
     * Returns the coding type used for output compression
     *
     * @return string
     */
    public function getCodingType() : string
    {
        return zlib_get_coding_type();
    }

}

