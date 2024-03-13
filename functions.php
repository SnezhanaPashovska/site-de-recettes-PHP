<?php
function isValidRecipe(array $recipe):bool{
  if (array_key_exists('is_enabled', $recipe)) {
    $isEnabled = $recipe['is_enabled'];
    } else {
      $isEnabled = false;
    }

    return $isEnabled;
};

/*The function name is isValidRecipe, recipe is an array and boolean. If the key 'is_enabled' exists in $recipe 
then display it if not don't display it*/



function displayAuthor(string $authorEmail, array $users):string
{
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return $user['full_name'] . '(' . $user['age'] . ' ans)';
        }
    }
};

/*To display the author we create the function displayAuthor which is a string and it returns us a string,
for each user display the name and the email. users as user then authorEmail is equal to $user -email then we get a return users
full name and age */

function getRecipe(array $recipes):array{
  $valid_recipes = [];
  foreach($recipes as $recipe){
    if(isValidRecipe($recipe)){
      $valid_recipes[] = $recipe;
    }
  }
  return $valid_recipes;
};

function redirectToUrl(string $url) : never{

  header("Location: {$url}");
  exit();

}

/*a functon that is an array and returns an array. To display every recipe that is valid.
valid_recipe is an array. recipes=recipe if the recipe is valid then return it as the array valid_recipes wich is equal to recipe */
?>