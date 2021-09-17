using JetBrains.Annotations;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PlayerCamera : MonoBehaviour
{
    public GameObject playerShip;

    private readonly float height = 2.0f, distance = 15.0f;
    private readonly float followDamping = 8f, rotationDamping = 100.0f;


    // Start is called before the first frame update
    void Start()
    {
        transform.position = playerShip.transform.TransformPoint(0f, height, -distance);
    }

    // Update is called once per frame
    void Update()
    {
        transform.position = UnityEngine.Vector3.Lerp(transform.position,
        transform.position = playerShip.transform.TransformPoint(0f, height, -distance),
        Time.deltaTime * followDamping);

        Quaternion rotation = Quaternion.LookRotation(playerShip.transform.position - transform.position);

        transform.rotation = Quaternion.Slerp(transform.rotation, rotation, Time.deltaTime * rotationDamping);
    }
}
