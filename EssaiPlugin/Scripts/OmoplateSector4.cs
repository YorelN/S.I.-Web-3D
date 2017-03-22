using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class OmoplateSector4 : MonoBehaviour
{

    public Vector3 Deplacement;
    public float Speed = 10.0F;
    public int smooth = 5;
    public int tiltAngle = 45;
    public float RotationInitial = 180;
    public float StepRotationMin;
    public float anglex;
    public float RotzMin;
    public float RotxMin;

    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

        float RotationZ = Input.GetAxis("Horizontal") * Speed;
        RotationZ *= Time.deltaTime;
        transform.Rotate(-Vector3.up, RotationZ * Speed);


        float tiltAroundZ = RotzMin + Input.GetAxis("Horizontal") * tiltAngle;
        float anglerotx = RotxMin + Input.GetAxis("Horizontal") * tiltAngle * anglex;
        Quaternion target = Quaternion.Euler(anglerotx, RotationInitial, tiltAroundZ);
        transform.rotation = Quaternion.Slerp(transform.rotation, target, Time.deltaTime * smooth);
    }
}