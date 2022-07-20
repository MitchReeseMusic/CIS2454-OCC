
package recipes;


import java.io.Serializable;
import java.util.ArrayList;
import stocks.Ingredient;

// java bean!
// no argument constructor
// public get/set methods for ALL attributes
// implemenets Serializable

// AKA POJO - Plain Old Java Object
public class Recipe implements Serializable {

    private String directions;
    private String name;
    ArrayList<Ingredient> ingredientList = new ArrayList<>();
    
    public Recipe() {
            name = "Al Pastor Tacos";
            directions = "First, pat your flank steak dry."
                    + " Second, put it into a gallon zip lock bag along with soy sauce, grated garlic"
                    + " the lime juice, minced cilantro, black pepper, and grated onion."
                    + " Let marinate for 45 minutes to 1 hour."
                    + " Third, shake off the excess liquid over the bag and place the steak into"
                    + " a carbon steel frying pan set to medium high heat. Cook 3 minutes each side"
                    + " per pound of beef."
                    + " Finally, remove beef from pan when medium rare. Allow to rest for 10 minutes,"
                    + " slice against the grain, and serve on a warm tortilla along with any toppings"
                    + " that you would like.";
            ArrayList<Ingredient> ingredientList = new ArrayList<>();
            ingredientList.add(new Ingredient("flank steak", 1, "lb(s)"));
            ingredientList.add(new Ingredient("limes", 2, ""));
            ingredientList.add(new Ingredient("grated garlic", 4, "cloves"));
            ingredientList.add(new Ingredient("grated onion", .5, "of a small onion(s)"));
            ingredientList.add(new Ingredient("soy sauce", 1, "cups"));
            ingredientList.add(new Ingredient("cilantro", .25, "of a bunch"));
        }
    
    public Recipe(String name, String directions) {
            this.name = name;
            this.directions = directions;
            ArrayList<Ingredient> ingredientList = new ArrayList<>();
        }

    public String getDirections() {
        return directions;
    }

    public void setDirections(String directions) {
        this.directions = directions;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getIngredientList() {
        return ingredientList.toString();
    }
}
