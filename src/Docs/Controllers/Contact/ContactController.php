<?php

namespace Webkul\RestApi\Docs\Controllers\Contact;

class ContactController
{
    /**
     * @OA\Get(
     *     path="/api/v1/contacts/persons",
     *     operationId="contactList",
     *     tags={"Contacts"},
     *     summary="Get list of contact person",
     *     security={ {"sanctum_admin": {} }},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/Person")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     )
     * )
     */
    public function index()
    {
    }

    /**
     * @OA\Get(
     *     path="/api/v1/contacts/persons/search",
     *     summary="Get person by search query",
     *     description="Retrieve persons based on a search query",
     *     operationId="getPersonBySearchQuery",
     *     tags={"Contacts"},
     *     security={ {"sanctum_admin": {} }},
     *     @OA\Parameter(
     *         name="query",
     *         in="query",
     *         description="Search query for the person",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Person")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="[]"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid request"
     *     )
     * )
     */
    public function search()
    {
    }

    /**
     * @OA\Get(
     *     path="/api/v1/contacts/persons/{id}",
     *     operationId="getPersonById",
     *     tags={"Contacts"},
     *     summary="Get contact person by id",
     *     security={ {"sanctum_admin": {} }},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of contact person",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="Object",
     *                 ref="#/components/schemas/Person"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     )
     * )
     */
    public function show()
    {
    }

    /**
     * @OA\Post(
     *     path="/api/v1/contacts/persons",
     *     operationId="createPerson",
     *     tags={"Contacts"},
     *     summary="Create new contact person",
     *     security={ {"sanctum_admin": {} }},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *            @OA\Property(
    *                   property="name",
    *                   type="string",
    *                   description="Name of the person",
    *                   example="Suraj Kashyap"
    *             ),
     *            @OA\Property(
     *                 property="emails",
     *                 type="array",
     *                 description="Email addresses of the person",
     *                 @OA\Items(
     *                     required={"value", "label"},
     *                     @OA\Property(property="value", type="string", description="Email address", example="suraj.kashyap370@webkul.in"),
     *                     @OA\Property(property="label", type="string", description="Label for the email address", example="work")
     *                 )
     *            ),
     *            @OA\Property(
     *                property="contact_numbers",
     *                type="array",
     *                description="Contact numbers of the person",
     *                @OA\Items(
     *                    required={"value", "label"},
     *                    @OA\Property(property="value", type="string", description="Contact number", example="09315981404"),
     *                    @OA\Property(property="label", type="string", description="Label for the contact number", example="work")
     *                )
     *            ),
     *            @OA\Property(
     *                property="organization_id",
     *                type="integer",
     *                description="ID of the organization associated with the person",
     *                example=1
     *            ),
     *            @OA\Property(
     *                property="entity_type",
     *                type="string",
     *                description="Type of entity (e.g., 'persons')",
     *                example="persons"
     *            )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="Object",
     *                 ref="#/components/schemas/Person"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     )
     * )
     */
    public function store()
    {
    }

    /**
     * @OA\Put(
     *     path="/api/v1/contacts/persons/{id}",
     *     operationId="updatePerson",
     *     tags={"Contacts"},
     *     summary="Update contact person",
     *     security={ {"sanctum_admin": {} }},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of contact person",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *            required=true,
     *            @OA\JsonContent(
     *               @OA\Property(
     *                      property="name",
     *                      type="string",
     *                      description="Name of the person",
     *                      example="Suraj Kashyap"
     *                ),
     *               @OA\Property(
     *                    property="emails",
     *                    type="array",
     *                    description="Email addresses of the person",
     *                    @OA\Items(
     *                        required={"value", "label"},
     *                        @OA\Property(property="value", type="string", description="Email address", example="suraj.kashyap370@webkul.in"),
     *                        @OA\Property(property="label", type="string", description="Label for the email address", example="work")
     *                    )
     *               ),
     *               @OA\Property(
     *                   property="contact_numbers",
     *                   type="array",
     *                   description="Contact numbers of the person",
     *                   @OA\Items(
     *                       required={"value", "label"},
     *                       @OA\Property(property="value", type="string", description="Contact number", example="09315981404"),
     *                       @OA\Property(property="label", type="string", description="Label for the contact number", example="work")
     *                   )
     *               ),
     *               @OA\Property(
     *                   property="organization_id",
     *                   type="integer",
     *                   description="ID of the organization associated with the person",
     *                   example=1
     *               ),
     *               @OA\Property(
     *                   property="entity_type",
     *                   type="string",
     *                   description="Type of entity (e.g., 'persons')",
     *                   example="persons"
     *               )
     *            )
     *        ),
     *        @OA\Response(
     *            response=200,
     *            description="Successful operation",
     *            @OA\JsonContent(
     *                @OA\Property(
     *                    property="data",
     *                    type="Object",
     *                    ref="#/components/schemas/Person"
     *                )
     *            )
     *        ),
     *        @OA\Response(
     *            response=401,
     *            description="Unauthorized"
     *        )
     *  )
     */
    public function update()
    {
    }              
    
    /**
     * @OA\Delete(
     *     path="/api/v1/contacts/persons/{id}",
     *     operationId="deletePerson",
     *     tags={"Contacts"},
     *     summary="Delete contact person",
     *     security={ {"sanctum_admin": {} }},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of contact person",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     )
     * )
     */
    public function destroy()
    {
    }

    /**
     * @OA\Post(
     *     path="/api/v1/contacts/persons/mass-destroy",
     *     operationId="massDeletePerson",
     *     tags={"Contacts"},
     *     summary="Delete multiple contact persons",
     *     security={ {"sanctum_admin": {} }},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="rows",
     *                 type="array",
     *                 description="IDs of the contact persons to be deleted",
     *                 @OA\Items(
     *                     type="integer",
     *                     example=1
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     )
     * )
     */
    public function massDestroy()
    {
    }
}
