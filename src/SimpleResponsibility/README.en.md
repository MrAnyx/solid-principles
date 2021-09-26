# Simple Responsibility Principle

This first principle is probably the best known of all. As its name may indicate, this one says that each function, each
class must be as specialized as possible. These elements should have only one responsibility. In many cases, it is
easier to develop and maintain a class or function that has only one purpose. In other words, "Swiss Army knife" classes
and functions should be avoided at all costs. It is better to develop several specialized classes than one that does
everything.

Moreover, this principle will be mainly applied in aspect-oriented programming, because all cross-cutting concerns will
be dissociated from the logic principle of the method.

Thus, by applying this principle, it will be much easier, as a developer, to :

- Maintain the classes and functions, because they will have only one responsibility,
- Reuse classes and functions,
- Test the classes and functions, because there will be fewer cases to consider.

*Author : Robin B ([@MrAnyx](https://github.com/MrAnyx))*