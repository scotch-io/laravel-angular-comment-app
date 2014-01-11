<?php

/**
  * This class displays cost for a specific entity.
  *
  * @return cost
  * @return costs as array
  */
  
class Cost {

	// cost ingredients related to prep
	public static function ingredients($preps)
	{
		$cost = 0;
		
		foreach ($preps as $prep)
			foreach ($prep->ingredients as $ingredient)
				{	
					$cost += $ingredient->cost;
				}
		return $cost;		
    }
	
	// cost ingredients related to recipe's preps	
    public static function recipes($preps)
	{
		
		$costs = array();
		foreach ($preps as $prep)
			foreach ($prep->recipes as $recipe)
				{	
					$recipe_cost = 0;
					$query = Recipe::with('preps.ingredients')->find($recipe->id);
					$rec_preps = $query->preps;
					$recipe_cost = Cost::ingredients($rec_preps);
					$costs[] = $recipe_cost;
				}
			
			return $costs;
			

    }
	
	
}