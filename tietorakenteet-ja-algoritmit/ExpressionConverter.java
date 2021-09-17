package fi.lab.converters;

import java.util.*;

/**
 * @author Joonas Lehtikangas, Antti Päivärinta, Anni Karja ja Santeri Laiho
 */
public class ExpressionConverter {
    // infixToPostFix() converts infix string to postfix Queue e.g
    public static boolean infixToPostFix(String infix, Queue<String> postfix){
        Stack<String> temp = new Stack<>();
        String result = "";
        int size = infix.length();

        for(int i = 0; i<size; i++) {
            char c = infix.charAt(i);
            String s = Character.toString(c);
            
            // if char is accepted
            if(!isAcceptableChar(s)) {
                emptyQueue(postfix);
                return false;
            }
            // if negative number
            if (s.equals("-"))
                if(i == 0 || (Character.toString(infix.charAt(i-1)).equals("("))) {
                    result += s;
                    s = "";
            }
            
            // if char is a number
            if(isNumeric(s)){
                result += s; 
                if(!isNumeric(Character.toString(infix.charAt(1+i)))) {
                    postfix.add(result);
                    result = ""; 
                }
            // if char is a operator
            }else if (precedence(s)>0){
                if(precedence(Character.toString(infix.charAt(1+i)))>0) {
                    emptyQueue(postfix); 
                    return false;
                }
                while(!temp.isEmpty() && precedence(temp.peek()) >= precedence(s)) {
                    postfix.add(temp.pop());
                }
                temp.push(s);
                
            // if char is ( or )   
            }else if (s.equals("(")) {
                temp.push(s);
            }else if (s.equals(")")){
                try {
                    String helper = temp.pop();
                    while (!helper.equals("(")){
                        postfix.add(helper);
                        helper = temp.pop();
                    }
               }catch (Exception e){
                   emptyQueue(postfix);
                   return false;
               }
            }
        }
        
        // make sure temp is empty
        while (!temp.isEmpty()){
            if(temp.peek().equals("(")) {
                emptyQueue(postfix);
                return false;
            }else {
                postfix.add(temp.pop());
            }
        }
        return true;       
    }

    // calcPostFix() calculates postfix String to double value, if possible
    // If postfix string is illegal, the method throws exception
    public static double calcPostFix(Queue<String> postfix) throws IllegalArgumentException {
        Queue<String> original = new ArrayDeque<>(postfix);
        Stack<Double> temp = new Stack<>();
        while(!original.isEmpty()){
            String pops = original.remove();
            //if pops is num
            if(isNumeric(pops)) temp.push(Double.parseDouble(pops));
            // if pops is operator
            else{
                double right;
                double left;
                try {
                    right = temp.pop();
                    left = temp.pop();
                }catch(Exception e){
                    throw new IllegalArgumentException("Invalid postfix input");
                }
                double result = 0;
                if (pops.compareTo("+") == 0) {
                    result = left + right;
                } else if (pops.compareTo("-") == 0) {
                    result = left - right;
                } else if (pops.compareTo("*") == 0) {
                    result = left * right;
                } else if (pops.compareTo("/") == 0) {
                    result = left / right;
                }
                temp.push(result);
            }
        }
        if(!temp.isEmpty()){
            double finalResult = temp.pop();
            if(temp.isEmpty()) return finalResult;
        }
        throw new IllegalArgumentException("Invalid postfix input"); 
    }
    
    // postfixToTree() returns top tree Node and prints the tree
    public static Node postfixToTree(Queue<String> postfix){
        Queue<String> original = new ArrayDeque<>(postfix);
        Stack<Node> tree = new Stack<>();
        Node t, t1, t2;
        int size = original.size();
        System.out.println("Tree from bottom left to top");
        for (int i = 0; i<size ; i++) {
            String c = original.remove();
            if (isNumeric(c)){
                t = new Node(c);
                System.out.println((i+1) + " - value: " + t.getValue() + ", left: " + t.getLeft() + ", right: " + t.getRight());
                tree.push(t);
            }else {
                t1 = tree.pop();
                t2 = tree.pop();
                t = new Node(c, t2, t1);
                System.out.println((i+1) + " - value: " + t.getValue() + ", left: " + t2.getValue() + ", right: " + t1.getValue());
                tree.push(t);
            }
        }
        return tree.pop();
    }
    
    // calcTree() calculates the resulting value starting from node provided
    public static double calcTree(Node tree){
        if(tree.getLeft() != null) {
            if(!isNumeric(tree.getValue())) {
                double left = calcTree(tree.getLeft());
                double right = calcTree(tree.getRight());
                switch (tree.getValue()) {
                    case "+" -> {
                        double result = left + right;
                        return result;
                    }
                    case "-" -> {
                        double result = left - right;
                        return result;
                    }
                    case "*" -> {
                        double result = left * right;
                        return result;
                    }
                    case "/" -> {
                        double result = left / right;
                        return result;
                    }
                }
            }
        } 
        return Double.parseDouble(tree.getValue()); 
    } 
    
    // all helper methods
    // isNumeric() a helper method you may need..
    public static boolean isNumeric(String str) { 
      try {  
        Double.parseDouble(str);  
        return true;
      } catch(NumberFormatException e){  
        return false;  
      }  
    }
    // precedence() compares operators
    public static int precedence(String c){
        switch (c){
            case "+", "-" -> {
                return 1;
            }
            case "*", "/" -> {
                return 2;
            }
        }
        return -1;
    }
    // isAcceptableChar() verifies if string char is accepted
    public static boolean isAcceptableChar(String s){
        String acceptableChars = "+-*/0123456789() ";
        return acceptableChars.contains(s);         
    }
    // emptyQueue() removes all from given queue
    public static void emptyQueue(Queue<String> queue) {
        while (queue.peek() != null) {
            queue.remove();
        }
    }
    
    public static void main(String[] args) {
        // ----------- test ------------------------
        String infix ="(12+13)*(-45-16)";   // initial infix test string
        Queue<String> postfix= new ArrayDeque<>(); // postfix the infix will be converted to
        boolean ok = infixToPostFix(infix, postfix);    // conversion
        System.out.println("conversion ok:"+ok+" postfix"+postfix);
        double res = calcPostFix(postfix);
        System.out.println("expression result by calcPostfix(): "+res);
        Node n = postfixToTree(postfix);
        res = calcTree(n);
        System.out.println("expression result by calcTree(): "+res);
        // --------- end of test ------------------
    }
}
