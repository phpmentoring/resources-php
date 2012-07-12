/**
 * Getting comments right can be tricky when you're starting out.
 * A good rule of thumb is that code should be self documenting,
 * unless its particularly complex.  
 *
 * Well chosen class, method and property names make code more 
 * readable and easier for other developers to understand (this
 * is what is meant by self-documenting).  Sometimes, however, 
 * areas of code can be necessarily complex and it is here that
 * comments should be used as an aid to 'future you', and other 
 * developers who may be required to maintain your code.
 *
 * Inline comments can be made with # and // symbols.  These
 * symbols should appear on every new line in a multi-line 
 * comment.  
 *
 * Block comments can be wrapped by /* and */ symbols at the
 * start and end of the block.  The text you are reading now
 * is inside a block comment (the use of * on each line is not
 * required but can make it easier to spot the block comment).
 *
 * Below are some simple examples of bad, good and better use 
 * of comments, which should give you a clearer idea of when and 
 * how to use them.  Follow the related reading links at the end 
 * of the page for more information.
 *
 */


#### BAD COMMENTS ####
 
// get a user by primary key
$user = $this->getRepository('User')->findOneById($id);
 
if(!$user) {
	// if user doesn't exist, throw an exception
	throw new NotFoundHttpException('No user found for id: '.$id);
}
 
 
 
#### BETTER COMMENTS ####
 
// confirm the user exists
$user = $this->getRepository('User')->findOneById($id);
 
if(!$user) {
	throw new NotFoundHttpException('No user found for id: '.$id);
}
 
 
 
#### EVEN BETTER? ####
 
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


### Code samples for this tutorial were provided by @lazymanc http://www.wheelsandcogs.co.uk

### Related reading:  http://www.codinghorror.com/blog/2006/12/code-tells-you-how-comments-tell-you-why.html
###					  http://www.codinghorror.com/blog/2008/07/coding-without-comments.html

