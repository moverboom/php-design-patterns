# Composite
Compose objects into tree structures to represent part-whole hierarchies.
Composite lets clients treat individual objects and compositions the same way.
This means that a node in a tree can either be a leaf or another composite, but
they can be used in the same way.

This example includes a very simple file system structure, but makes the pattern clear.
A composite may use any data structure to store its children, whatever structure works
the problem.
