# Interpreter
The interpreter pattern uses an abstract syntax tree, representing a grammar or structure of a sentence,
to interpret sentences in a language.
If a problem occurs often enough, it might be worthwhile to express the instances of
the problem as sentences in a simple language that the interpreter can process.
Regular expression are an example of this.
However, regular expression or other sophisticated expression languages are
mostly fist parsed with a parser or compiler which build the abstract syntax tree.
The interpreter pattern doesn't include this part.

The biggest difference between Composite (Structural) and Interpreter (Behavioral)
is Composite only defines a way to access a family of objects in a uniform way,
whereas Interpreter ties behaviour/logic to a traversed tree structure. The job of the Interpreter
is to read an abstract syntax tree and evaluate it. In order to do so it can use
a Composite pattern to travers it. Another solution would be to use the Visitor pattern.
