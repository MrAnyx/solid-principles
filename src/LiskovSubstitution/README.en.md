# Liskov Substitution Principle

The Liskov substitution principle is particularly simple to understand. It states that all subclasses of a parent class
must be able to perform the same actions. If this is the case, then it will be possible to inter-change a parent class
with one of its child classes without any problems.

Generally, with the help of inheritance, this principle makes it possible to homogenize the behavior of the classes we
create for a project.

For example, if we create a `Mustang` and `Ford` class that inherit from the same `Car` class, the `Mustang` and `Ford`
classes must have the same behavior as the `Car` class so that, if necessary, it is possible to interchange, for
example, the `Mustang` class with the `Car` class without any problems.

By applying this type of principle, it will then be possible to:

- Reduce the probability of bugs,
- Make our code more logical.

*Author : Robin B (@MrAnyx)*