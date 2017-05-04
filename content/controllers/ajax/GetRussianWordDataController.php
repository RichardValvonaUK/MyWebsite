<?php

namespace controllers\ajax;
use \AjaxController;

class GetRussianWordDataController extends AjaxController {

	private $uniqueKey = 'uk.richardvalvona.PJKDVRJWL2391367909393';

	private $nounColumns = '`dec_s_n`, `dec_type`, `gender`, `is_animate`, `dec_s_a`, `dec_s_g`, `dec_s_d`, `dec_s_i`, `dec_s_i_alt`, `dec_s_p`, `dec_p_n`, `dec_p_g`, `dec_p_d`, `dec_p_i`, `dec_p_p`, `english_words`, `antonyms`, `categories`, `derived_terms`, `related_terms`';
				
	private $adjectiveColumns = '`dec_nom_m`, `dec_gen_m`, `dec_dat_m`, `dec_ins_m`, `dec_pre_m`, `dec_nom_f`, `dec_acc_f`, `dec_gen_f`, `dec_int_alt_f`, `dec_nom_n`, `dec_nom_p`, `dec_gen_p`, `dec_dat_p`, `dec_ins_p`, `dec_short_m`, `dec_short_f`, `dec_short_n`, `dec_short_p`, `dec_comp`, `dec_sup`, `english_words`, `antonyms`, `categories`, `derived_terms`, `related_terms`';
	
	private $verbColumns = '`infinitive`, `aspect`, `pres_1s`, `pres_2s`, `pres_3s`, `pres_1p`, `pres_2p`, `pres_3p`, `fut_1s`, `fut_2s`, `fut_3s`, `fut_1p`, `fut_2p`, `fut_3p`, `past_m`, `past_f`, `past_n`, `past_p`, `imp_s`, `imp_p`, `pres_act`, `past_act`, `pres_adv`, `past_adv`, `past_adv_short`, `pres_pas`, `past_pas`, `partners`, `english_words`, `antonyms`, `categories`, `derived_terms`, `related_terms`';

	private function getArrayFromQuery($table, $columns) {
		$query = "SELECT " . $columns . " FROM " . $table;
		$result = \Base::$con->query($query);
	
		$resultArray = array();
		
		while ($row = $result->fetch_row()) {
			array_push($resultArray, $row);
		}
		
		return $resultArray;
	}

	private function convertColumnNamesToArray($columns) {
		$fields = explode(",", $columns);
		
		$fieldsCount = count($fields);
		
		for ($i=0; $i<$fieldsCount; $i++) {
			$nextField = $fields[$i];
			$nextField = trim($nextField);
			$nextField = str_replace("`", "", $nextField);
			$fields[$i] = $nextField;
		}
		
		return $fields;
	}

    public function doInit() {
		$nouns = $this->getArrayFromQuery('`Nouns`', $this->nounColumns);
		$adjectives = $this->getArrayFromQuery('`Adjectives`', $this->adjectiveColumns);
		$verbs = $this->getArrayFromQuery('`Verbs`', $this->verbColumns);
		
		$data = array(
			'uniqueKey' => $this->uniqueKey,
			'nouns' => array(
				'data-count' => count($nouns),
				'fields' => $this->convertColumnNamesToArray($this->nounColumns),
				'data' => $nouns,
			),
			'adjectives' => array(
				'data-count' => count($adjectives),
				'fields' => $this->convertColumnNamesToArray($this->adjectiveColumns),
				'data' => $adjectives,
			),
			'verbs' => array(
				'data-count' => count($verbs),
				'fields' => $this->convertColumnNamesToArray($this->verbColumns),
				'data' => $verbs,
			)
		);
		
		return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
