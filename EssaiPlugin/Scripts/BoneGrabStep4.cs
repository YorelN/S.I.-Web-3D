using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class BoneGrabStep4 : MonoBehaviour
{

    public Vector3 Deplacement;
    public float Speed = 10.0F;
    public int smooth = 5;
    public int tiltAngle = 45;
    public float RotationInitial = 180;
    public TextMesh ShowAnglex;
    public TextMesh ShowAnglez;
    public float StepRotationMin;

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


        float tiltAroundZ = StepRotationMin + Input.GetAxis("Horizontal") * tiltAngle;
        float anglerotx = Input.GetAxis("Vertical") * tiltAngle;
        Quaternion target = Quaternion.Euler(-anglerotx, RotationInitial, tiltAroundZ);
        transform.rotation = Quaternion.Slerp(transform.rotation, target, Time.deltaTime * smooth);

        ShowAnglex.text = "  " + anglerotx.ToString("f0");
        tiltAroundZ *= -1;
        ShowAnglez.text = "  " + tiltAroundZ.ToString("f0");

    }
}