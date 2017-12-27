<?php
if( !function_exists('trans_ucfirst') ) {
    /**
     * Translate the given message.
     *
     * @param  string  $key
     * @param  array   $replace
     * @param  string  $locale
     * @return \Illuminate\Contracts\Translation\Translator|string|array|null
     */
    function trans_ucfirst($key = null, $replace = [], $locale = null)
    {
        if (is_null($key)) {
            return app('translator');
        }

        return ucfirst(app('translator')->trans($key, $replace, $locale));
    }
}