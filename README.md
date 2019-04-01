# test_OOP_inheritance

It's a codeing challenge. It is about interface, class inheritance, etc.

Requirements: 
1, Chicken implements the bird interface.
2, Chicken lays chicken egg.
3, Different bird type lays diff eggs, correspondingly.
4, Hatch twice will throw exception.

// test
$bird = new Chicken();
try {
    $egg = $bird->layEgg()->hatch();
    var_dump($egg->getBirdType()); // output "Chicken"
} catch (Exception $e) {
    echo "error:" . $e->getMessage();
}
