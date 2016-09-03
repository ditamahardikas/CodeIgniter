<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
class M_composer extends Eloquent
{
    protected $table = 'mahasiswa';
    public $timestamps = false;
    protected $primaryKey = 'nis';
}
