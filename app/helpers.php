
<?php

if ( ! function_exists('the_image_url')) {
/**
* @param $media
* @param  bool  $size
* @param  bool  $webp
*
* @return mixed
*/
function the_image_url($media, $size = false)
{
return Cache::rememberForever('the_new_image_url1_'.$media.$size, function () use ($media, $size) {
if ( ! is_object($media)) {
$media = Cache::rememberForever('the_image_url1_'.$media, function () use ($media) {
return \App\Medias::where('id', $media)->first();
});
}

if (isset($media->image_sizes)) {
$image_sizes = json_decode($media->image_sizes);
}
if ($size != false) {
if (isset($image_sizes->$size) && isset($image_sizes->$size->file)) {
return url($media->directory.$image_sizes->$size->file);
}
}
if (isset($media->path)) {
if ($media->webp) {
return url(preg_replace('/.[^.]*$/', '.webp', $media->path));
}

return url($media->path);
}

return false;
});
}
}
