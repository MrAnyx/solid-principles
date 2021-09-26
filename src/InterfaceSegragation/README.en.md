# Interface Segregation Principle

The principle of interface segregation is a principle that says that a class should only implement the methods that are
really necessary. By extension, a class should only implement the interfaces that are necessary for it.

Indeed, if a certain class should not implement a certain method, then it is not necessary to implement it.

For example, suppose we have a `FlyingMachine` interface that contains the `startTheMotors()` and `fly()` methods. Then
this interface could be implemented on an `Airplane` class, but not for a `Glider` class. Indeed, in both cases, the
machine in question can fly, but, in the case of the glider, it has no engine. It would then be necessary to create
several interfaces in order to implement only the functions necessary for the class.

Thus, it is better to implement several specific interfaces rather than a too generic willow.

Applying this principle allows to:

- Have concise classes, without superfluous and which have a precise objective,
- Reduce the occurrence of bugs in case of non-implemented methods

*Author : Robin B (@MrAnyx)*