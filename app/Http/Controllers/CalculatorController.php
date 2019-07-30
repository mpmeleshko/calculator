<?php

namespace App\Http\Controllers;

use App\Services\Calculator\Contracts\ICalculator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class CalculatorController extends Controller
{
    /**
     * @var ICalculator
     */
    private $calculator;

    /**
     * CalculatorController constructor.
     * @param ICalculator $calculator
     */
    public function __construct(ICalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('calculator');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function calculate(Request $request, Response $response)
    {
        $input = $request->only([
            'firstValue',
            'secondValue',
            'operation'
        ]);

        $validator = Validator::make($input, [
            'firstValue' => 'required|numeric',
            'secondValue' => 'required|numeric',
            'operation' => 'required',
        ]);

        if ($validator->fails()) {
            return $response
                ->setContent($validator->errors())
                ->setStatusCode(SymfonyResponse::HTTP_UNPROCESSABLE_ENTITY);
        }

        $result = $this->calculator->process($input);

        return view('calculator', compact('result'));
    }
}
