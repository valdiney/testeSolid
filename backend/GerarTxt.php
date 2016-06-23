<?php 
class GerarTxt
{
	protected $path;
	protected $file;

	public function setPath($path)
	{
		$this->path = $path;
	}
    
	public function setFile($file, $mode = "w")
	{
		$help = "{$this->path}/{$file}.txt";
		$this->file = fopen($help, $mode);
	}
    
	public function writeFile($archives)
	{
		fwrite($this->file, $archives);
	}
    
	public function close()
	{
		fclose($this->file);
	}
}