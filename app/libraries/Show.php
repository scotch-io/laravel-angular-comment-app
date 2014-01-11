<?php

/*
* This class shows related entities of an object.
*
* @returns arrays
*/
class Show
{

	private $preps       = array();
	private $ingredients = array();
	private $recipes     = array();

	// show preps with ingredients
	public static function preps($preps)
	{
		foreach($preps as $key => $value) {
			$preps[$key]['id'] = '';
			// $preps[$key]['id']          = $value->id;
			// $preps[$key]['recipe_id']   = $value->recipe_id;
			// $preps[$key]['step_number'] = $value->step_number;
			// $preps[$key]['title']       = $value->title;
			// $preps[$key]['procedure']   = $value->procedure;
			// $preps[$key]['prep_time']   = $value->prep_time;
			// $preps[$key]['photo']       = $value->photo;
		}

		return $preps;
	}

	// show ingredients
	public static function ingredients($preps)
	{
		foreach ($preps as $prep)
			foreach ($prep->ingredients as $ingredient)
				$ingredients[$ingredient->id] = $ingredient;

		return $ingredients;
	}

	// show recipes
	public static function recipes($preps)
	{
		foreach ($preps as $prep)
			foreach ($prep->recipes as $recipe)
				$recipes[$recipe->id] = $recipe;

		return $recipes;
	}

}