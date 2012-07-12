Level 1 Commenting Tutorial
---------------------------

Getting comments right can be tricky when you're just starting out. A good rule of thumb is that code should be self documenting, unless its particularly complex.

Well chosen class, method and property names make code more readable and easier for other developers to understand (this is what is meant by self-documenting).  Sometimes, however, areas of code can be necessarily complex and it is here thatcomments should be used as an aid to future you, and other developers who may be required to maintain your code.

##Inline comments

    // Inline comments can be made with # or // symbols.  These
    // symbols should appear on every new line in a multi-line
    // comment, as shown here.

    #  Its good to be consistent, so you should probably pick a
    #  symbol and stick with it.


##Block comments

    /* 
     * Block comments can be wrapped by /* and */ symbols at the
     * start and end of the block.  The text you are reading now
     * is inside a block comment (the use of * on each line is not
     * required but can make it easier to spot the block comment).
     */


Below are some simple examples of bad, good and better use of comments, which should give you a clearer idea of when and how to use them.  Follow the related reading links at the end of the page for more information.



##Bad comments

    // get a user by primary key
    $user = $this->getRepository('User')->findOneById($id);

    if(!$user) {
        // if user doesn't exist, throw an exception
        throw new NotFoundHttpException('No user found for id: '.$id);
    }

These comments are 'bad' because it is not necessary to comment every line.  They do not add value to the code and in fact make it a bit less readable perhaps.

Also, when refactoring code it is easy to forget to update the comments.  Out of date comments are worse than no comments, and ubiquitous comments can be difficult to keep up to to date.



##Better comments

    // confirm the user exists
    $user = $this->getRepository('User')->findOneById($id);

    if(!$user) {
        throw new NotFoundHttpException('No user found for id: '.$id);
    }

This single comment is better because it is short and concise, clearly indicating the purpose of the code that follows.


##Even better?

    if(!userExists($id)) {
      throw new NotFoundHttpException('No user found for id: '.$id);
    }

    /**
     * Checks for an existing user.
     *
     * @return bool
     */
    function userExists($id)
    {
        $user = $this->getRepository('User')->findOneById($id);

        if(!$user) {
           return false;
        }

        return true;
    }

This example is 'even better' because the code is cleaner and the block comment provided describes the userExists method clearly and concisely, indicating the expected return type.



## Accreditation
 Code samples for this tutorial were provided by [@lazymanc](http://www.wheelsandcogs.co.uk)


## Related reading:

[http://www.codinghorror.com/blog/2006/12/code-tells-you-how-comments-tell-you-why.html](http://www.codinghorror.com/blog/2006/12/code-tells-you-how-comments-tell-you-why.html)

[http://www.codinghorror.com/blog/2008/07/coding-without-comments.html](http://www.codinghorror.com/blog/2008/07/coding-without-comments.html)

