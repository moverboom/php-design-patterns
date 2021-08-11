# Builder
Useful when constructing the object is more complex and the final object
can have multiple representations, and when the steps needed to create an
object should be independent of the actual object.

It includes an abstract builder class that defined all steps that can be taken, and a Director
that uses an implementation of the abstract builder class and tells it what steps to take.
So the steps will always be the same, just the builder changes. Important to note it that
the abstract builder defines empty functions instead of abstract functions. This allows
subclasses of the builder to only implement what they need.
