# Template Method
A template method is a method that defines the order in which certain functions of an algorithm should be executed.
Those methods are abstract method which subclasses can implement.
Using this patterns ensures the order of execution is always the same, but the implementation can vary.
In addition to the abstract methods which a subclass _must_ implement, the abstract class containing the template method
can also define hook method which the subclass _may_ implement. Those functions do nothing by default
and allow the subclass to add extra behaviour.
Template methods are so fundamental that they can be found in almost every abstract class.
A great example of this in our code is the `PubSubConsumerCommand`. It has the template method `doRun` which calls the
abstract `processMessages` function.

Since this is such a common structure, which I've used many times I'm skipping the example here.
