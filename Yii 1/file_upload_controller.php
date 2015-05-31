<?php
	$uploadedFile=CUploadedFile::getInstance($model,'foto');
	if (!empty($uploadedFile) && is_object($uploadedFile) && get_class($uploadedFile)==='CUploadedFile') {
		$namaFile = rand(0,99999)."-pp-".$uploadedFile;
		$model->foto = $namaFile;
	}else{
		$model->foto = $foto;
	}
	if ($model->validate()) {
		if($model->save()){
			if (!empty($uploadedFile)) {
				$uploadedFile->saveAs(Yii::app()->basePath.'/../images/user/'.$namaFile);
			}
			$this->redirect(array('view','id'=>$model->id));
		}else{
			//print_r($model->getErrors());
		}
	}else{
		 //print_r($model->errors);
	}
?>