
package fi.lab.converters;

/**
 *
 * @author YourTeamNames
 */
class Node {
    private String value;
    private Node left;
    private Node right;

    public Node(String value){
        this(value,null,null);
    }
    public Node(String value, Node left, Node right){
        setValue(value);
        setLeft(left);
        setRight(right);
    }
    /**
     * @return the value
     */
    public String getValue() {
        return value;
    }

    /**
     * @param value the value to set
     */
    public void setValue(String value) {
        this.value = value;
    }

    /**
     * @return the left
     */
    public Node getLeft() {
        return left;
    }

    /**
     * @param left the left to set
     */
    public void setLeft(Node left) {
        this.left = left;
    }

    /**
     * @return the Right
     */
    public Node getRight() {
        return right;
    }

    /**
     * @param Right the Right to set
     */
    public void setRight(Node right) {
        this.right = right;
    }
}
