# Visitor
Define a new operation on classes without changing them.
Instead of subclassing, add one new class that implements the behaviour that can be applied to all elements in a set.

The visitor patterns consists of two class hierarchies:
* One hierarchy for the nodes being operated on
* One hierarchy for the visitor objects that can be applied to the elements in the hierarchy

The visitors contain the behaviour that can be executed on the node elements. So as long as the node hierarchy doesn't
change, we can add behaviour by only adding one visitor class.
This pattern is also most suited for situations where the node hierarchy that is being operated on doesn't
change very often.
