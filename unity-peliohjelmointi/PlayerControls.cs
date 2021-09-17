using System.Collections;
using System.Collections.Generic;
using System.Numerics;
using UnityEngine;

public class PlayerControls : MonoBehaviour { 

    public float thrustSpeed;
    public float turnSpeed;
    public float hoverPower;
    public float hoverHeight;

    public GameObject playerShip; 
    public UnityEngine.Vector3 originalPos; // Lisäys

    private float thrustInput;
    private float turnInput;
    private Rigidbody shipRigidBody;


    void Start()
    {
        shipRigidBody = GetComponent<Rigidbody>();
        originalPos = playerShip.transform.position; // Lisäys
    }

    void Update()
    {
        thrustInput = Input.GetAxis("Vertical");
        turnInput = Input.GetAxis("Horizontal");

        if (Input.GetKeyDown("space")) // Lisäys
        {
            transform.position = originalPos; // Lisäys
        }
    }

    void FixedUpdate()
    {
        shipRigidBody.AddRelativeTorque(0f, turnInput * turnSpeed, 0f);
        shipRigidBody.AddRelativeForce(0f, 0f, thrustInput * thrustSpeed);

        Ray ray = new Ray(transform.position, -transform.up);

        if (Physics.Raycast(ray, out RaycastHit hit, hoverHeight))
        {
            float proportionalHeight = (hoverHeight - hit.distance) / hoverHeight;
            UnityEngine.Vector3 appliedHoverForce = UnityEngine.Vector3.up * proportionalHeight * hoverPower;
            shipRigidBody.AddForce(appliedHoverForce, ForceMode.Acceleration);

        }
    }
}
