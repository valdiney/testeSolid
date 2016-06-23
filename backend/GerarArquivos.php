<?php
class GerarArquivos
{
	protected $usuarios;
	protected $gerarTxt;

	public function setUsuarios($usuarios)
	{
		$this->usuarios = $usuarios;
	}

	public function setGerarTxt($gerarTxt)
	{
		$this->gerarTxt = $gerarTxt;
	}

	public function gerarArquivoTxt()
	{
		$usuariosJson = json_encode($this->usuarios->geraArrayUsuario());

		$this->gerarTxt->setPath('backend/arquivosTxt');
		$this->gerarTxt->setFile('arquivo');

		if ($this->gerarTxt->writeFile($usuariosJson)) {
			$this->gerarTxt->close();
			return true;
		}

		return false;
	}
}